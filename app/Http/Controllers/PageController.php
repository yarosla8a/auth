<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function main(){
        return view('main');
    }
    public function travel(){
        return view('travel');
    }


    public function admin(){
        return view('admin',[
            "users"=>User::all()
        ] );
    }
    public function users(){
        return view('users',[
            "name" => Auth::user()->name,
            "email" => Auth::user()->email
       ] );
    }
    public function setting(){
        return view('setting'
            ,[
                "id" => Auth::user()->id,
            "name" => Auth::user()->name,
            "email" => Auth::user()->email
        ]
        );
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name =$request->input('name');
        $user->email =$request->input('email');


        $user->save();
        return redirect()->route('users')->with('success', 'all done');
    }


}
