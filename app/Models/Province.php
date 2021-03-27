<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
