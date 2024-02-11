<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
