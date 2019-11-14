<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function listings()
  {
    return $this->belongsToMany("App\Listing");
  }
}
