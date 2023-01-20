<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $matches = Match::all();
        return view('guest.home', [
            'matches' => $matches,
        ]);
    }
}
