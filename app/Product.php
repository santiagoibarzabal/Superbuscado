<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name','suggestedPrice','brand','netWeight','description','avatar'];

  public function category()
  {
    return $this->belongsTo("App\Category");
  }

  public function stocks()
  {
    return $this->belongsToMany("App\Stock");
  }

  public function listings()
  {
    return $this->belongsToMany("App\Listing")->withPivot('quantity');
  }


}
