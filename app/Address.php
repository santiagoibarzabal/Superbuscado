<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

  protected $fillable = [
    'address', 'city', 'province','zip_code', 'apartment'
  ];



  public function user()
  {
    return $this->belongsTo("App\User");
  }



}
