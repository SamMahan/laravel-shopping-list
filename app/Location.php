<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model 
{

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    protected $fillable = [
        'name', 'priority'
    ];

    public function products()
    {
        return $this->hasMany('App/Product');
    }

    // public function shoplists()
    // {
    //     return $this->hasManyThrough('App\ShopList', 'App\Product');
    // }

}
