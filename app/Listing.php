<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  protected $withCount = [
    'products',
  ];

  protected $fillable = [
    'name', 'quantity', 
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
