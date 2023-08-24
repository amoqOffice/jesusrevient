<?php

namespace App\Http\Controllers\Back;

use App\Activite;
use App\Categorie;
use App\Eglise;
use App\Responsable;
use App\Rubrique;
use App\Type;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::orderBy('date_deb', 'desc')->get();

        return view('back.Activite.index', compact('activites'));
    }

    public function create()
    {
        // Vérification de Type avant création d'Activité
        session()->forget('isExist');
        // session()->put('isExist', true);

        if(Type::first() == null) {
            session()->put('isExist', false);
            session()->put('previous_url', route('back.activite.create'));

            Toastr::warning('Vous devez créer le Type d\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.type.create');
        }
        elseif (Responsable::first() == null) {
            session()->put('isExist', false);
            session()->put('previous_url', route('back.activite.create'));

            Toastr::warning('Vous devez créer le Responsable lié à l\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.responsable.create');
        }
        elseif (Categorie::first() == null) {
            session()->put('isExist', false);
            session()->put('previous_url', route('back.activite.create'));

            Toastr::warning('Vous devez créer la Catégorie liée à l\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.categorie.create');
        }
        elseif (Rubrique::first() == null) {
            session()->put('isExist', false);
            session()->put('previous_url', route('back.activite.create'));

            Toastr::warning('Vous devez créer la Rubrique liée à l\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.rubrique.create');
        }
        elseif (Eglise::first() == null) {
            session()->put('isExist', false);
            session()->put('previous_url', route('back.activite.create'));

            Toastr::warning('Vous devez créer l\'Eglise liée à l\'Activité en premier', 'Alerte Système');
            return redirect()->route('back.eglise.create');
        }

        return view('back.Activite.create');
    }

    public function store(Request $request) {
        // Validation des données du formulaire
        $request->validate([
            'titre' => 'required',
            'type_id' => 'required',
        ]);

        // Vérifie l'image
        $imgLink = null;
        if($request->img == null) {

            $imgLink = getBestYouTubeThumbnail($request->url);
            if (is_null($imgLink)) {
                Toastr::error('Image non ajoutée', 'Action sur Activité');
                return back();
            }
        }
        else {
            // Enregistrement de l'image
            $fileName = time() . '.' . $request->img->extension();
            $request->img->move('assets/back/img/uploaded', $fileName);
        }

        // Enregistrements de l'Activité
        $activite = Activite::create([
            'titre' => $request->titre,
            'lieu' => $request->lieu,
            'url' => $request->url,
            'description' => $request->description,
            'date_deb' => date('Y-m-d', strtotime($request->date_deb)),
            'date_fin' => date('Y-m-d', strtotime($request->date_fin)),
            'type_id' => $request->type_id,
            'categorie_id' => $request->categorie_id,
            'isEvent' => (boolean)$request->isEvent,
            'img' => !is_null($imgLink) ? $imgLink : "assets/back/img/uploaded/$fileName",
        ]);

        // Association du Type à l'Activité
        $type = Type::find($request->type_id);
        $type->activites()->save($activite);

        // Différentes Associations liées à l'Activité
        $activite->tags()->attach($request->tag_ids);
        $activite->eglises()->attach($request->eglise_ids);
        $activite->rubriques()->attach($request->rubrique_ids);
        $activite->responsables()->attach($request->responsable_ids);

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
        // Mise à jour des enrégistrements de l'Activité
        $activite = Activite::findOrFail($id);
        $activite->titre = $request->titre;
        $activite->lieu = $request->lieu;
        $activite->url = $request->url;
        $activite->description = $request->description;
        $activite->date_deb = $request->date_deb;
        $activite->date_fin = $request->date_fin;
        $activite->type_id = $request->type_id;

        // Vérifie l'image
        // $imgLink = null;
        if($request->img == null) {

            // Enregistrement de l'image
            $imgLink = getBestYouTubeThumbnail($request->url);

            if (is_null($imgLink)) {
                Toastr::error('Image non ajoutée', 'Action sur Activité');
                return back();
            }
            else {
                $activite->img = $imgLink;
            }
        }
        else {
            $fileName = time() . '.' . $request->img->extension();
            $request->img->move('assets/back/img/uploaded', $fileName);
            $activite->img = "assets/back/img/uploaded/$fileName";
        }

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
