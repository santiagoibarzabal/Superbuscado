<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

  protected $fillable = [
    'name',
  ];

    public function user()
    {
      return $this->belongsTo("App\User");
    }

    public function products()
    {
      return $this->belongsToMany("App\Product");
    }

    public function listings()
    {
      return $this->belongsToMany("App\Cart");
    }
}
