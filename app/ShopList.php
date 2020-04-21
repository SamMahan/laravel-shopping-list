<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopList extends Model 
{

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    protected $with = ['product'];
    protected $fillable = [
        'quantity', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
