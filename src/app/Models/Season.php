<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

        public function product_season() {
            return $this->belongsToMany(product_season::class)->withPivot('product_season');
        }
}
