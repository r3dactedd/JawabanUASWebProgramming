<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showData(){
        $data = Item::all();
        return view('home',['data'=>$data]);
    }
}
