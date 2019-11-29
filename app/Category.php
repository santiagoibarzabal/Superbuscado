<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  public function products()
  {
    return $this->hasMany(Product::class);
  }

  // --------- Categorías Padres

  public static function scopeParent($query)
  {
    return $query->whereNull('category_id');
  }

  // --------- Categorías Hijas

  public function children()
  {
    return $this->hasMany(self::class, 'category_id')->orderBy('name', 'asc');
  }
  
}
