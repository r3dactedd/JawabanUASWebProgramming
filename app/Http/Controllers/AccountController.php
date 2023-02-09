<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showData(){
        $user = User::all();
        return view('account.management',['user'=>$user]);
    }

    public function changeRole($id){
        $user = User::find($id);
        return view('account.update', ['user'=>$user]);
    }

    public function updateRole(Request $request, $id){
        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('/home');
    }

    public function deleteUser($id){
        User::destroy($id);

        return redirect('/management');
    }
}
