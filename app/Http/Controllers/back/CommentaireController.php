<?php

namespace App\Http\Controllers\Back;

use App\Commentaire;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class CommentaireController extends Controller
{
    public function index()
    {
        $commentaires = Commentaire::all();

        return view('back.Commentaire.index', compact('commentaires'));
    }

    public function create()
    {
        return view('back.Commentaire.create');
    }

    public function store(Request $request)
    {
        Commentaire::create($request->all());

        Toastr::success('Commentaire bien ajouté(e)', 'Action sur Commentaire');

        return redirect()->route('back.commentaire.create');
    }

    public function show($id)
    {
        $commentaire = Commentaire::findOrFail($id);

        return view('back.Commentaire.show', compact('commentaire'));
    }

    public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);

        return view('back.Commentaire.edit', compact('commentaire'));
    }

    public function update(Request $request, $id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update($request->all());

        Toastr::success('Commentaire bien mis à jour', 'Action sur Commentaire');

        return redirect()->route('back.commentaire.index');
    }

    public function delete($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->delete();

        Toastr::success('Commentaire bien supprimé(e)', 'Action sur Commentaire');

        return redirect()->route('back.commentaire.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Commentaire::destroy($id);
        }

        Toastr::success('Les Commentaires sélectionné(e)s ont été bien supprimé', 'Action sur Commentaire');

        return '200';
    }
}
