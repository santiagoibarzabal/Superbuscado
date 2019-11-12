<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  public function products()
  {
    return $this->hasMany("App\Product", "category_id_product");
  }

  // --------- Categorías Padres

  public function parent() {
    return $this->belongsToOne(static::class, 'subcategory_id');
  }

  // --------- Categorías Hijas

  public function children() {
    return $this->hasMany(static::class, 'subcategory_id')->orderBy('name', 'asc');
  }


}
