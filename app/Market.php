<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function stores(){
      return $this->hasMany("App\Store", "market_id");
    }

    public function stocks(){
      return $this->hasMany("App\Stock", "market_id");
    }






}
