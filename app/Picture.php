<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['product_id','picture'];
    public function product()
    {
        return$this->belongsTo(Product::class);
    }
}
