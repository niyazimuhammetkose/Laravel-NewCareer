<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    # One To Many (Inverse)
    public function category(){
        return $this->belongsTo(Category::class);
    }

    # One To Many (Job->>>App)
    public function app(){
        return $this->hasMany(Application::class);
    }

    # One To Many (Inverse)
    public function sektor(){
        return $this->belongsTo(Sektor::class);
    }
}
