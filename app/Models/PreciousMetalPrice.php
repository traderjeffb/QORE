<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreciousMetalPrice extends Model
{

    protected $table = 'precious_metal_prices';
    use HasFactory;
    protected $fillable=['gold', 'silver', 'palladium', 'platinum','timestamp' ];
}
