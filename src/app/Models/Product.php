<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
          protected $fillable = [
            'name',
            'price',
            'image',
            'description',
            'product_id',
            'created_at',
            'updated_at'
          ];
          
        public function season() {
            return $this->belongsToMany(Season::class);
        }
}
