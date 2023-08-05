<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Alaouy\Youtube\Facades\Youtube;
use App\External\GenerateImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnseignementController extends Controller
{
    public function index() {
        $enseignements = DB::table('activites')->get();

        return view('front.predications.enseignements.index', compact('enseignements'));
    }
}
