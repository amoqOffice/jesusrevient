<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmissionTVController extends Controller
{
    public function index() {
        return view('front.emissionsTV.index');
    }
}
