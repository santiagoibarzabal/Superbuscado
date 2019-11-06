<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  public function market()
  {
    return $this->belongsTo("App\Market", "market_id");
  }


  public function products()
  {
    return $this->belongsToMany("App\Product", "product_stock", "stock_id", "product_id");
  }
}
