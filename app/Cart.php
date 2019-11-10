<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function lists()
  {
    return $this->belongsToMany("App\List", "list_cart", "cart_id_list_cart", "list_id_list_cart");
  }
}
