<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);// select * from user where project_id = 1
    }

}

//hasOne
//hasMany
//belongsTo
//belongsToMany
//morphMany
//morphToMany