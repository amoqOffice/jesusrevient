<?php

namespace App\Http\Controllers\Back;

use App\Article;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('back.Article.index', compact('articles'));
    }

    public function create()
    {
        return view('back.Article.create');
    }

    public function store(Request $request)
    {
        Article::create($request->all());

        Toastr::success('Article bien ajouté(e)', 'Action sur Article');

        return redirect()->route('back.article.create');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('back.Article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('back.Article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        Toastr::success('Article bien mis à jour', 'Action sur Article');

        return redirect()->route('back.article.index');
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        Toastr::success('Article bien supprimé(e)', 'Action sur Article');

        return redirect()->route('back.article.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Article::destroy($id);
        }

        Toastr::success('Les Articles sélectionné(e)s ont été bien supprimé', 'Action sur Article');

        return '200';
    }
}
