<?php

namespace App\Http\Controllers\Back;

use App\Type;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('back.Type.index', compact('types'));
    }

    public function getTypesAjax(Request $request) {
        $term = $request->term;
        $types = Type::where('nom', 'LIKE', '%' . $term . '%')->get();

        $formattedTypes = [];
        foreach ($types as $type) {
            $formattedTypes[] = [
                'id' => $type->id,
                'text' => $type->nom
            ];
        }

        return response()->json($formattedTypes);
    }

    public function create()
    {
        // Enregistre le lien précedent après enregistrement
        if(request('back') != null) {
            session()->put('back', request('back'));
        }

        return view('back.Type.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required',
        ]);

        // Enregistrement des données
        $type = Type::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        // Valide la création de l'association
        if ($type->id != null) {
            // Message de succès
            Toastr::success('Type bien ajouté(e)', 'Action sur Type');

            session()->put('isExist', true);
        }

        // Gestion des conditions de redirection
        if(session()->has('isExist') && session()->get('isExist') == true) {
            $url = session()->get('previous_url');

            session()->forget('isExist'); // Remise a 0 de isExist
            session()->forget('previous_url'); // Remise a 0 de previous_url

            return redirect($url);
        }

        return redirect()->route('back.type.create');
    }

    public function show($id)
    {
        $type = Type::findOrFail($id);

        return view('back.Type.show', compact('type'));
    }

    public function edit($id)
    {
        $type = Type::findOrFail($id);

        return view('back.Type.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);
        $type->update($request->all());

        Toastr::success('Type bien mis à jour', 'Action sur Type');

        return redirect()->route('back.type.index');
    }

    public function delete($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        Toastr::success('Type bien supprimé(e)', 'Action sur Type');

        return redirect()->route('back.type.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Type::destroy($id);
        }

        Toastr::success('Les Types sélectionné(e)s ont été bien supprimé', 'Action sur Type');

        return '200';
    }
}
