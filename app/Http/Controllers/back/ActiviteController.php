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
        session()->push('isExist', false);
        if(Type::first() == null) {
            session()->push('isExist', true);

            Toastr::warning('Vous devez créer le Type d\'Activité en premier', 'Alerte Système');
            redirect()->route('back.activite.create');
        }
        return view('back.Activite.create');
    }

    public function store(Request $request)
    {
        // Redirection sur Type Activité si ce dernier n'est pas encore créé
        if(session()->has('isExist')) {
            (session()->get('isExist') == true) ? redirect()->route('back.home') : '';
        }

        //  vers Type d'Activité
        Activite::create($request->all());

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
