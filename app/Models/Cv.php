<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    # One To Many (Inverse CV->User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    # One To Many (Inverse CV->App)
    public function app(){
        return $this->belongsTo(Application::class);
    }
}
