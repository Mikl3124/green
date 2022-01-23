<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    public function projets()
    {
        return $this->hasMany(Projet::class);
    }
}
