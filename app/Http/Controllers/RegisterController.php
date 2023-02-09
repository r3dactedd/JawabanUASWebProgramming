<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function register(Request $request){
    $rules = [
        'role_id' => 'required',
        'gender_id' => 'required',
        'firstname' => 'required|string|min:5|max:25',
        'lastname' => 'required|string|min:5|max:25',
        'email' => 'required|string',
        'password' => 'required|string|min:5|max:20',
        'password_confirmation' => 'same:password',
        'profile_img' => 'required|image|file'
    ];

    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
        return back()->withErrors($validator);
    }

    $imageName = $request->profile_img->getClientOriginalName();
    // $request->profile_img->storeAs('storage/images', $imageName);

    $user = new User();
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role_id = $request->role_id;
    $user->gender_id = $request->gender_id;

    $filename = Str::orderedUuid() . "." . $request->profile_img->getClientOriginalExtension();

    $user->profile_img = $filename;

    Storage::putFileAs('public/images/', $request->profile_img, $filename);

    $user->save();


    return redirect('/login')->with('success', 'Registration successfull! Please login');
    }

}

