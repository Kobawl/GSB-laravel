<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table = "Voitures";

    public function Visiteurs() {
        return $this->belongsToMany(Visiteur::class);
    }
}
