<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'phone_number',
        'address',
        'city' ,
        'state',
        'country',
        'zip_code',
    ];
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
