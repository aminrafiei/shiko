<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Picture
 * @package App
 */
class Picture extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id','picture'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return$this->belongsTo(Product::class);
    }
}
