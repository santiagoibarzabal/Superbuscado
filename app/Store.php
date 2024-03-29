<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function market()
    {
      $this->belongsTo("App\Market");
    }

    public function stocks()
    {
      return $this->hasMany("App\Stock");
    }
}
