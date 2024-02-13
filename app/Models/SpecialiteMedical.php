<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialiteMedical extends Model
{
    use HasFactory;
    protected $table = 'specialite_medicals';

    protected $fillable = [
        'name',
    ];
    public function medecins()
    {
        return $this->belongsToMany(Medecin::class);
    }
}
