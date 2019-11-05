<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    public function user()
    {
      return $this->belongsTo("App\User", "idList")
    }

    public function products()
    {
      return $this->belongsToMany("App\Product", "product_list", "idList", "idProduct");
    }

    public function lists()
    {
      return $this->belongsToMany("App\Cart", "cart_list", "idList", "idCart");
    }
}
