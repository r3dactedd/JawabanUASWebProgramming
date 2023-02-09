<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Item;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function productDetails($id){
        $item = Item::find($id);


        return view('item.detail', ['item'=>$item]);
    }

}

