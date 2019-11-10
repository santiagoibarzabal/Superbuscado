<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    public function user()
    {
      return $this->belongsTo("App\User", "user_id_list")
    }

    public function products()
    {
      return $this->belongsToMany("App\Product", "list_product", "list_id_list_product", "product_id_list_product");
    }

    public function lists()
    {
      return $this->belongsToMany("App\Cart", "list_cart", "list_id_list_cart", "cart_id_list_cart");
    }
}
