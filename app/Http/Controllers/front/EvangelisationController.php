<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class EvangelisationController extends Controller
{
    public function index() {
        // https://img.youtube.com/vi/vus1z3ETBxo/hqdefault.jpg
        return view('front.predications.evangelisations.index');
    }
}
