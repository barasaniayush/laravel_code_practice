<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function userLogin(Request $request) {
        return $request->input('name');
        $request->session()->put('user','$data');
        return redirect('profile');
    }
}
