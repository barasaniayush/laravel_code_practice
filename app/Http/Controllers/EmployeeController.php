<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function getData(Request $request) {
        return DB::table('employee')->join('company','employee.id','=','company.employeeid')->get();
    }
}
