<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function stores(){
      return $this->hasMany("App\Store");
    }
}
