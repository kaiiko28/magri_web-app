<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function searchpage() {
        return view('frontend.search');
    }


    public function offers() {
        return view('frontend.offers');
    }

    public function reaturant() {
        return view('frontend.restaurant');
    }

    public function login() {
        return view('frontend.login');
    }

    public function trending() {
        return view('frontend.trending');
    }
}
