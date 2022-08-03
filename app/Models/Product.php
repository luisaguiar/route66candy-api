<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'brand',
      'category',
      'image_path',
      'retail',
      'weight',
      'rated_by',
      'rating',
      'upc'
    ];

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
