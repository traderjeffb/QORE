<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employee_id',
        'employee_name', // Add other fields as needed
        'date',
        'attendance_points',
        'performance_rating',
        // Add other benefit fields here
    ];
