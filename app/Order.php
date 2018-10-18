<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['order_id','cart','user_id','peyment_type','confirm'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
