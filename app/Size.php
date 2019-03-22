<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Size
 * @package App
 */
class Size extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
