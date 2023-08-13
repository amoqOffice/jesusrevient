<?php

namespace App\Http\Controllers;

use App\Categorie;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

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
        Categorie::create($request->all());

        Toastr::success('Categorie bien ajouté');

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

        Toastr::success('Categorie bien mis à jour');

        return redirect()->route('back.categorie.index');
    }

    public function delete($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        Toastr::success('Catégorie bien supprimée');

        return redirect()->route('back.categorie.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Categorie::destroy($id);
        }

        Toastr::success('Les Catégories sélectionnées ont été bien supprimé', 'Action sur Catégories');
        
        return 'end';
    }
}
