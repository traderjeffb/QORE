<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model {
    public function modules() {
        return $this->belongsToMany(Module::class);
    }

    public function projects() {
        return $this->belongsToMany(Project::class);
    }

    use HasFactory;

}
