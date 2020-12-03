<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
