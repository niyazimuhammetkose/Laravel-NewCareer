<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    # One To Many (Inverse App->User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    # One To Many (Inverse App->Job)
    public function job(){
        return $this->belongsTo(Job::class);
    }

    # One To Many (Inverse App->Cv)
    public function cv(){
        return $this->belongsTo(Cv::class);
    }
}
