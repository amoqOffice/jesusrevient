<?php

namespace App\Http\Controllers\Front;

use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index() {
        $types = Type::all();

        return view('front.accueil', compact('types'));
    }
}
