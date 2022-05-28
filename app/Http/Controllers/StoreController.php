<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function storeMember(Request $request) {
        $data = $request->input('name');
        $request->session()->flash('name', '$data');
        return redirect('store');
    }
}
