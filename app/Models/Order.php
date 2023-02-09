<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['user_id', 'item_id', 'price'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item(){
        return $this->hasOne(Item::class, 'id', 'item_id');
    }
}
