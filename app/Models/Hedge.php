<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hedge extends Model
{
    protected $table = 'hedge';

    use HasFactory;
    protected $fillable=['title','timestamp','budget', 'usd_amount'];
}
