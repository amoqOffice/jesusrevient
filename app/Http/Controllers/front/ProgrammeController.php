<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index() {
        return view('front.eglises.programmes.index');
    }
}
