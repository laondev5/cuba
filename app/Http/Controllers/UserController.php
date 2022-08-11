<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function about() {
        return view('user.about');
    }

    public function web() {
        return view('user.web');
    }

    public function mobile() {
        return view('user.mobile');
    }

    public function pc() {
        return view('user.pc');
    }

    public function space() {
        return view('user.space');
    }
}
