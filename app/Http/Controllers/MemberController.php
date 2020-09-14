<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller{
    
    public function index(){
        return view('members.index', ['members' => \App\Member::all()]);
    }

    
    public function create(){
        return view('members.create');
    }

    
    public function store(Request $request){
        $member = new Member();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $member->fill($request->all());
        $member->save();
        return redirect()->route('members.index');
    }
    
    public function edit(Member $member){
        return view('members.edit', ['member' => $member]);
    }

   
    public function update(Request $request, Member $member){
        $member->fill($request->all());
        $member->save();
        return redirect()->route('members.index');
    }
   
    public function destroy(Member $member){
    $member->delete();
    return redirect()->route('members.index');
    }
}
