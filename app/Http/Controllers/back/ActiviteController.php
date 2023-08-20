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

    public function store(Request $request) {
        // Validation des données du formulaire
        $request->validate([
            'titre' => 'required',
            'type_id' => 'required',
        ]);

        // Enregistrement de l'image
        $fileName = time() . '.' . $request->img->extension();
        $request->img->move('assets/back/img/uploaded', $fileName);

        // Enregistrements de l'Activité
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

        // Association du Type à l'Activité
        $type = Type::find($request->type_id);
        $type->activites()->save($activite);

        // Différentes Associations liées à l'Activité
        $activite->eglises()->sync($request->eglise_ids);
        $activite->rubriques()->sync($request->rubrique_ids);
        $activite->responsables()->sync($request->responsable_ids);

        // Message de succès et redirection
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
        // Enregistrement de l'image
        $fileName = time() . '.' . $request->img->extension();
        $request->img->move('assets/back/img/uploaded', $fileName);

        // Mis à jour des enrégistrements de l'Activité
        $activite = Activite::findOrFail($id);
        $activite->titre = $request->titre;
        $activite->lieu = $request->lieu;
        $activite->url = $request->url;
        $activite->description = $request->description;
        $activite->date_deb = $request->date_deb;
        $activite->date_fin = $request->date_fin;
        $activite->type_id = $request->type_id;
        $activite->img = "assets/back/img/uploaded/$fileName";
        $activite->save();

        // Association du Type à l'Activité
        $type = Type::find($request->type_id);
        $type->activites()->save($activite);

        // Différentes Associations liées à l'Activité
        $activite->eglises()->sync($request->eglise_ids);
        $activite->rubriques()->sync($request->rubrique_ids);
        $activite->responsables()->sync($request->responsable_ids);

        // Message de succès et redirection
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
