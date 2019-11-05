<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function category()
  {
    return $this->belongsTo("App\Category", "idCategory");
  }

  public function stocks()
  {
    return $this->belongsToMany("App\Stock", "stock_product", "idProduct", "idStock");
  }

  public function lists()
  {
    return $this->belongsToMany("App\List", "product_list", "idProduct", "idList");
  }


}
