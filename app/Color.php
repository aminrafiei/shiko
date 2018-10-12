<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
