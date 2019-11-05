<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  public function market()
  {
    return $this->belongsTo("App\Market", "idMarket");
  }


  public function products()
  {
    return $this->belongsToMany("App\Product", "stock_product", "idStock", "idProduct");
  }
}
