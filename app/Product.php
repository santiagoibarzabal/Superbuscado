<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category()
  {
    return $this->belongsTo("App\Category", "category_id");
  }

  public function stocks()
  {
    return $this->belongsToMany("App\Stock", "product_stock", "product_id", "stock_id");
  }

  public function lists()
  {
    return $this->belongsToMany("App\List", "list_product", "product_id", "list_id");
  }


}
