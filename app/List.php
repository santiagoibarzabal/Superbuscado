<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    public function user()
    {
      return $this->belongsTo("App\User", "user_id")
    }

    public function products()
    {
      return $this->belongsToMany("App\Product", "list_product", "list_id", "product_id");
    }

    public function lists()
    {
      return $this->belongsToMany("App\Cart", "list_cart", "list_id", "cart_id");
    }
}
