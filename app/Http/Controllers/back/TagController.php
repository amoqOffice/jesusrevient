<?php

namespace App\Http\Controllers\Back;

use App\Tag;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('back.Tag.index', compact('tags'));
    }

    public function create()
    {
        return view('back.Tag.create');
    }

    public function store(Request $request)
    {
        Tag::create($request->all());

        Toastr::success('Tag bien ajouté(e)', 'Action sur Tag');

        return redirect()->route('back.tag.create');
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);

        return view('back.Tag.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('back.Tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        Toastr::success('Tag bien mis à jour', 'Action sur Tag');

        return redirect()->route('back.tag.index');
    }

    public function delete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        Toastr::success('Tag bien supprimé(e)', 'Action sur Tag');

        return redirect()->route('back.tag.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Tag::destroy($id);
        }

        Toastr::success('Les Tags sélectionné(e)s ont été bien supprimé', 'Action sur Tag');

        return '200';
    }
}
