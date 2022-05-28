<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    public function addData(Request $request) {
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->description = $request->description;
        $member->save();
        return redirect('add');
    }

    public function delete() {

    }
}
