<?php

namespace App\Http\Controllers\Back;

use App\Responsable;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class ResponsableController extends Controller
{
    public function index()
    {
        $responsables = Responsable::all();

        return view('back.Responsable.index', compact('responsables'));
    }

    public function create()
    {
        return view('back.Responsable.create');
    }

    public function store(Request $request)
    {
        Responsable::create($request->all());

        Toastr::success('Responsable bien ajouté(e)', 'Action sur Responsable');

        return redirect()->route('back.responsable.create');
    }

    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('back.Responsable.show', compact('responsable'));
    }

    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('back.Responsable.edit', compact('responsable'));
    }

    public function update(Request $request, $id)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->update($request->all());

        Toastr::success('Responsable bien mis à jour', 'Action sur Responsable');

        return redirect()->route('back.responsable.index');
    }

    public function delete($id)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();

        Toastr::success('Responsable bien supprimé(e)', 'Action sur Responsable');

        return redirect()->route('back.responsable.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Responsable::destroy($id);
        }

        Toastr::success('Les Responsables sélectionné(e)s ont été bien supprimé', 'Action sur Responsable');

        return '200';
    }
}
