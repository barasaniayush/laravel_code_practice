<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData() {
        return ["name"=>"ayush",
                "email"=>"ayush.barasai@gmail.com",
                "address"=>"thankot"];
    }
}
