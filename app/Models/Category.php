<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    # One To Many
    public function jobs(){
        return $this->hasMany(Job::class);
    }

    # One To Many Inverse (Category Parent)
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    # One To Many (Category Children)
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
