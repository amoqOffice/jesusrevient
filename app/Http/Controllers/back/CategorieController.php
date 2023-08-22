<?php

namespace App\Http\Controllers\Back;

use App\Categorie;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('back.Categorie.index', compact('categories'));
    }

    public function create()
    {
        return view('back.Categorie.create');
    }

    public function store(Request $request)
    {
        // Enregistrement des données
        $categorie = Categorie::create($request->all());

        if ($categorie->id != null) {
            // Message de succès
            Toastr::success('Categorie bien ajouté(e)', 'Action sur Categorie');

            session()->put('isExist', true);
        }

        // Gestion des conditions de redirection
        if(session()->has('isExist') && session()->get('isExist') == true) {
            session()->forget('isExist'); // Remise a 0 de isExist

            return redirect(session()->get('previous_url'));
        }

        return redirect()->route('back.categorie.create');
    }

    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('back.Categorie.show', compact('categorie'));
    }

    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);

        return view('back.Categorie.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());

        Toastr::success('Categorie bien mis à jour', 'Action sur Categorie');

        return redirect()->route('back.categorie.index');
    }

    public function delete($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        Toastr::success('Categorie bien supprimé(e)', 'Action sur Categorie');

        return redirect()->route('back.categorie.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Categorie::destroy($id);
        }

        Toastr::success('Les Categories sélectionné(e)s ont été bien supprimé', 'Action sur Categorie');

        return '200';
    }
}
