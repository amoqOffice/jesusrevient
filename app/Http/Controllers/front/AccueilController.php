<?php

namespace App\Http\Controllers\Front;

use App\Mail\TestMail;
use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AccueilController extends Controller
{
    public function index() {
        $types = Type::all();

        // Mail::to('amoq.office@gmail.com')->send(new TestMail);

        return view('front.accueil', compact('types'));
    }
}
