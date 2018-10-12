<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //not completed!!
    protected $fillable = [
        'title', 'description', 'price', 'tag'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function size()
    {
        return $this->belongsToMany(Size::class)->withTimestamps()->withPivot('qty');
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function picture()
    {
        return $this->hasMany(Picture::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

}
