<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }

}
