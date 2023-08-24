<?php

namespace App\Http\Controllers\Front;

use App\Activite;
use App\Categorie;
use App\Http\Controllers\Controller;
use App\Type;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class PredicationController extends Controller
{
    public function index($categorie) {

        $categoriePrincipale = Categorie::where('nom', 'like', "%$categorie%")->first();
        $predications = $categoriePrincipale->activites()->orderBy('date_deb', 'desc')->paginate(4);

        return view('front.predications.index', compact('predications'))->with([
            'predications' => $predications,
            'categoriePrincipale' => $categoriePrincipale->nom,
        ]);
    }

    public function show($categorie, $predication_id)
    {
        $predication = Activite::findOrFail($predication_id);
        // dd($categorie);

        return view('front.predications.show', compact('predication', 'categorie'));
    }

    public function show_videos() {
        return view('front.predications.show_videos');
    }

    public function edit($id)
    {
        // ${{ modelVariable }} = {{ model }}::findOrFail($id);

        // return view('back.{{ model }}.edit', compact('{{ modelVariable }}'));
    }

    public function update(Request $request, $id)
    {
        // ${{ modelVariable }} = {{ model }}::findOrFail($id);
        // ${{ modelVariable }}->update($request->all());

        // Toastr::success('{{ model }} bien mis à jour', 'Action sur {{ model }}');

        // return redirect()->route('back.{{ modelVariable }}.index');
    }

    public function delete($id)
    {
        // ${{ modelVariable }} = {{ model }}::findOrFail($id);
        // ${{ modelVariable }}->delete();

        // Toastr::success('{{ model }} bien supprimé(e)', 'Action sur {{ model }}');

        // return redirect()->route('back.{{ modelVariable }}.index');
    }

    public function deleteAll()
    {
        // foreach (request('deleted_ids') as $id) {
        //     {{ model }}::destroy($id);
        // }

        // Toastr::success('Les {{ model }}s sélectionné(e)s ont été bien supprimé', 'Action sur {{ model }}');

        // return '200';
    }
}
