<?php

namespace App\Http\Controllers\front;

use App\Activite;
use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index($type) {
        $typePrincipal = Type::where('nom', 'like', "%$type%")->first();
        $activites = $typePrincipal->activites()->orderBy('date_deb', 'desc')->paginate(4);

        return view('front.eglises.activites.index')->with([
            'activites' => $activites,
            'typePrincipal' => $typePrincipal->nom,
        ]);
    }

    public function show($type, $activite_id) {
        $typePrincipal = Type::where('nom', 'like', "%$type%")->first();
        $activite = Activite::findOrFail($activite_id);

        return view('front.eglises.activites.show', compact('activite', 'typePrincipal'));
    }
}
