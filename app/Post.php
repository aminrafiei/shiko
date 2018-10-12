<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name','description'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
