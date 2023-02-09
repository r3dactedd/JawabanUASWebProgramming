<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function addtoCart($id){
        $item = Item::find($id);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->item_id = $id;
        $order->price = $item->price;
        $order->save();

        return redirect('/cart');
    }

    public function showCart(){
        return view('cart.index', [
            'cart' => Order::where('user_id', auth()->id())->get(),
        ]);
    }

    public function removeFromCart($id){

        Order::destroy($id);

        return redirect('/cart');

   }

    public function checkout(){
        DB::table('orders')->delete();

        return redirect('/warning');
    }

}
