<?php

namespace App\Http\Controllers\Back;

use App\Eglise;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class EgliseController extends Controller
{
    public function index()
    {
        $eglises = Eglise::all();

        return view('back.Eglise.index', compact('eglises'));
    }

    public function create()
    {
        return view('back.Eglise.create');
    }

    public function store(Request $request)
    {
        // Enregistrement des données
        $eglise = Eglise::create($request->all());

        if ($eglise->id != null) {
            // Message de succès
            Toastr::success('Eglise bien ajouté(e)', 'Action sur Eglise');

            session()->put('isExist', true);
        }

        // Gestion des conditions de redirection
        if(session()->has('isExist') && session()->get('isExist') == true) {
            session()->forget('isExist'); // Remise a 0 de isExist

            return redirect(session()->get('previous_url'));
        }

        return redirect()->route('back.eglise.create');
    }

    public function show($id)
    {
        $eglise = Eglise::findOrFail($id);

        return view('back.Eglise.show', compact('eglise'));
    }

    public function edit($id)
    {
        $eglise = Eglise::findOrFail($id);

        return view('back.Eglise.edit', compact('eglise'));
    }

    public function update(Request $request, $id)
    {
        $eglise = Eglise::findOrFail($id);
        $eglise->update($request->all());

        Toastr::success('Eglise bien mis à jour', 'Action sur Eglise');

        return redirect()->route('back.eglise.index');
    }

    public function delete($id)
    {
        $eglise = Eglise::findOrFail($id);
        $eglise->delete();

        Toastr::success('Eglise bien supprimé(e)', 'Action sur Eglise');

        return redirect()->route('back.eglise.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Eglise::destroy($id);
        }

        Toastr::success('Les Eglises sélectionné(e)s ont été bien supprimé', 'Action sur Eglise');

        return '200';
    }
}
