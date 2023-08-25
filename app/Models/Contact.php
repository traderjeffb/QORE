<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
// In the Contact model

protected $fillable = ['name', 'phone', 'department', 'customer_id'];

public function customer()
{
    return $this->belongsTo(Customer::class);
}

}
