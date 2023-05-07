<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gold',
        'silver',
        'platinum',
        'palladium',
        'scandium',
        'yttrium',
        'lanthanum',
        'cerium',
        'praseodymium',
        'neodymium',
        'promethium',
    ];
}
