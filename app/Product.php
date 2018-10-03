<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function invProductcategory(){
        return $this->belongsTo('App\Productcategory','productcategory_id');
    }
}
