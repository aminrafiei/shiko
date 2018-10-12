<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['order_id','cart','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
