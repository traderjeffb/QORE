<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

protected $fillable = [
'name',
'budget',
'currency',
'country',
'description',
'objectives',
'status',
'chemical',
'fullyStaffed',
];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function units() {
        return $this->belongsToMany(Unit::class);
    }
}
