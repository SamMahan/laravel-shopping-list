<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{

    protected $with = ['location'];
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    protected $fillable = [
        'name', 'location_id'
    ];

    public function location()
    {
       return $this->belongsTo('App\Location');
       
    }

    public function shoplists()
    {
        return $this->hasMany('App\ShopList');
    }
}
