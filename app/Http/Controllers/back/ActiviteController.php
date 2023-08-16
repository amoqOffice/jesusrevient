<?php

namespace App\Http\Controllers\Back;

use App\Activite;
use App\Type;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::all();

        return view('back.Activite.index', compact('activites'));
    }

    public function create()
    {
        // Vérification de Type avant création d'Activité
        // session()->forget('isExist');
        session()->put('isExist', false);
        if(Type::first() == null) {
            session()->put('isExist', true);
            Toastr::warning('Vous devez créer le Type d\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.type.create')->with([
                'message' => 'Vous devez créer le Type d\'Activité en premier',
                'alert' => 'warning',
            ]);
        }
        return view('back.Activite.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'titre' => 'required',
            'type_id' => 'required',
        ]);

        // Enregistrement de l'image
        $fileName = time() . '.' . $request->img->extension();
        $request->img->move('assets/back/img/uploaded', $fileName);

        $activite = Activite::create([
            'titre' => $request->titre,
            'lieu' => $request->lieu,
            'url' => $request->url,
            'description' => $request->description,
            'date_deb' => $request->date_deb,
            'date_fin' => $request->date_fin,
            'type_id' => $request->type_id,
            'img' => "assets/back/img/uploaded/$fileName",
        ]);

        // Récupérer le type associé à l'activité
        $type = Type::find($request->type_id);

        // Ajouter l'activité au type
        $type->activites()->save($activite);

        // $activite->type()->associate($type)->save();
        // dd($activite->type);

        Toastr::success('Activité bien ajouté(e)', 'Action sur Activité');
        return redirect()->route('back.activite.create');
    }

    public function show($id)
    {
        $activite = Activite::findOrFail($id);

        return view('back.Activite.show', compact('activite'));
    }

    public function edit($id)
    {
        $activite = Activite::findOrFail($id);

        return view('back.Activite.edit', compact('activite'));
    }

    public function update(Request $request, $id)
    {
        $activite = Activite::findOrFail($id);
        $activite->update($request->all());

        Toastr::success('Activité bien mis à jour', 'Action sur Activité');

        return redirect()->route('back.activite.index');
    }

    public function delete($id)
    {
        $activite = Activite::findOrFail($id);
        $activite->delete();

        Toastr::success('Activité bien supprimé(e)', 'Action sur Activité');

        return redirect()->route('back.activite.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Activite::destroy($id);
        }

        Toastr::success('Les Activités sélectionné(e)s ont été bien supprimé', 'Action sur Activité');

        return '200';
    }
}
