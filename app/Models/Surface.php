<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surface extends Model
{
  public function projet()
  {
    return $this->hasOne(Projet::class);
  }
}
