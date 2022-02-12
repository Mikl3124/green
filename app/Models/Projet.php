<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  protected $guarded =[];

  public function user()
    {
      return $this->belongsTo(User::class);
    }

  public function maitre_oeuvre()
    {
      return $this->belongsTo(MaitreOeuvre::class);
    }

  public function maitre_ouvrage()
    {
      return $this->belongsTo(MaitreOuvrage::class);
    }

  public function pack()
  {
    return $this->belongsTo(Pack::class);
  }

  public function surface()
  {
    return $this->belongsTo(MaitreOuvrage::class);
  }

}
