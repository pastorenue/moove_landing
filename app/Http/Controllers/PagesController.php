<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Index page
    public function index() {
        return view("pages.index");
    }

    // About page
    public function about() {
        return view('pages.about');
    }

    // Some dummy Content
    public function dummyContent() {
        // get some dummy associative array
        $data = array("azeez" => 2000, "musa" => 3200, "faruk" => 400);

        // just send it to Blade to do the rest of the work
        return view('pages.dummy')->with('dummies', $data);
    }

    // Quick signup for info When Moove Launches
    public function access() {
        return view('pages.access');
    }

    // Succesful SignUp
    public function success() {
        return view('pages.success');
    }
}
