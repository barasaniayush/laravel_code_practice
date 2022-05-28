<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberController extends Controller
{
    public function list() {
        $data = Member::all();
        return view('list',['members'=>$data]);
    }

    public function getlist($id=null) {
        return $id?Member::find($id):Member::all();
    }

    public function index() {
        return Member::find(1)->companyData();
    }

    public function newindex() {
        return Member::all()->getDevice();
    }

    function delete($id) {
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id) {
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }

    function mutator() {
        $member = new Member;
        $member->name = "Bruce";
        $member->email = "bruce@gmail.com";
        $member->description = "My name is bruce";
        $member->save();
    }

    function update(Request $request) {
        $data = Member::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        $data->save();
        return redirect('list');
    }

    function operation() {
        return (array)DB::table('members')->find(4);
        
    }
}
