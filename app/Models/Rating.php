<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
