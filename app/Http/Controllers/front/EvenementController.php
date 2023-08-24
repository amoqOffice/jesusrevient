<?php

namespace App\Http\Controllers\Front;

use App\Activite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index() {
        $evenements = Activite::where('isEvent', true)->orderBy('date_deb', 'desc')->get();

        return view('front.eglises.evenements.index', compact('evenements'));
    }
}
