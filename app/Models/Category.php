<?php

namespace App\Models;

use App\Model\Projet;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function projets()
    {
        return $this->belongsToMany(Projet::class);
    }

    public function standbyprojects()
    {
        return $this->belongsToMany(Standbyproject::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
