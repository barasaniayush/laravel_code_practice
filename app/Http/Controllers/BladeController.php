<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function index() {
        return view('practice', ['name'=>'haha']);
    }
}
