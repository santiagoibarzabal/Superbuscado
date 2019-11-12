<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  public function products()
  {
    return $this->hasMany(Product::class, "category_id_product");
  }

  // --------- Categorías Padres

  public static function scopeSuper($builder)
  {
    return $builder->whereNull('category_id');
  }

  public function parent() {
    return $this->belongsTo(self::class, 'category_id');
  }

  // --------- Categorías Hijas

  public function children() {
    return $this->hasMany(self::class, 'category_id')->orderBy('name', 'asc');
  }


}
