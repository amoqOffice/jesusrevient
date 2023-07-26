<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnseignementController extends Controller
{
    public function index() {
        return view('front.predications.enseignements.index');
    }
}
