<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $with = ['store'];

  public function store()
  {
    return $this->belongsTo("App\Store");
  }


  public function products()
  {
    return $this->belongsToMany("App\Product");
  }
}
