<?php

namespace App\Http\Controllers\Back;

use App\Type;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('back.Type.index', compact('types'));
    }

    public function create()
    {
        return view('back.Type.create');
    }

    public function store(Request $request)
    {
        Type::create($request->all());

        Toastr::success('Type bien ajouté(e)', 'Action sur Type');

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
