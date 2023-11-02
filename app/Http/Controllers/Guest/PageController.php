<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comics;

class PageController extends Controller
{
    function index(){
        $comics = Comics::all();
        return view('welcome', compact('comics'));

    }

    /* function about(){
        return about('about');
    }

    function comics(){
        return comics('comics');
    } */
}
