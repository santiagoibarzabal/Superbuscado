<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function lists()
  {
    return $this->belongsToMany("App\List", "cart_list", "idCart", "idList");
  }
}
