<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  public function market()
  {
    return $this->belongsTo("App\Market", "market_id_stock");
  }


  public function products()
  {
    return $this->belongsToMany("App\Product", "product_stock", "stock_id_product_stock", "product_id_product_stock");
  }
}
