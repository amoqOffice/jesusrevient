<?php

namespace App\Http\Controllers\Back;

use App\Membre;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::all();

        return view('back.Membre.index', compact('membres'));
    }

    public function create()
    {
        return view('back.Membre.create');
    }

    public function store(Request $request)
    {
        Membre::create($request->all());

        Toastr::success('Membre bien ajouté(e)', 'Action sur Membre');

        return redirect()->route('back.membre.create');
    }

    public function show($id)
    {
        $membre = Membre::findOrFail($id);

        return view('back.Membre.show', compact('membre'));
    }

    public function edit($id)
    {
        $membre = Membre::findOrFail($id);

        return view('back.Membre.edit', compact('membre'));
    }

    public function update(Request $request, $id)
    {
        $membre = Membre::findOrFail($id);
        $membre->update($request->all());

        Toastr::success('Membre bien mis à jour', 'Action sur Membre');

        return redirect()->route('back.membre.index');
    }

    public function delete($id)
    {
        $membre = Membre::findOrFail($id);
        $membre->delete();

        Toastr::success('Membre bien supprimé(e)', 'Action sur Membre');

        return redirect()->route('back.membre.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Membre::destroy($id);
        }

        Toastr::success('Les Membres sélectionné(e)s ont été bien supprimé', 'Action sur Membre');

        return '200';
    }
}
