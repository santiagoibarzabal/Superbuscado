<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

  protected $fillable = [
    'address', 'apartment', 'city', 'province','zip_code', 
  ];



  public function user()
  {
    return $this->belongsTo("App\User");
  }



}
