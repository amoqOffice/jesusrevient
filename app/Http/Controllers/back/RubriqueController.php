<?php

namespace App\Http\Controllers\Back;

use App\Rubrique;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class RubriqueController extends Controller
{
    public function index()
    {
        $rubriques = Rubrique::all();

        return view('back.Rubrique.index', compact('rubriques'));
    }

    public function create()
    {
        return view('back.Rubrique.create');
    }

    public function store(Request $request)
    {
        Rubrique::create($request->all());

        Toastr::success('Ce Rubrique a été bien ajouté', 'Action sur Rubrique');

        return redirect()->route('back.rubrique.create');
    }

    public function show($id)
    {
        $rubrique = Rubrique::findOrFail($id);

        return view('back.Rubrique.show', compact('rubrique'));
    }

    public function edit($id)
    {
        $rubrique = Rubrique::findOrFail($id);

        return view('back.Rubrique.edit', compact('rubrique'));
    }

    public function update(Request $request, $id)
    {
        $rubrique = Rubrique::findOrFail($id);
        $rubrique->update($request->all());

        Toastr::success('Ce Rubrique a été bien mis à jour', 'Action sur Rubrique');

        return redirect()->route('back.rubrique.index');
    }

    public function delete($id)
    {
        $rubrique = Rubrique::findOrFail($id);
        $rubrique->delete();

        Toastr::success('Ce Rubrique a été bien supprimé', 'Action sur Rubrique');

        return redirect()->route('back.rubrique.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Rubrique::destroy($id);
        }

        Toastr::success('Les Rubriques sélectionné(e)s ont été bien supprimé', 'Action sur Rubrique');

        return '200';
    }
}
