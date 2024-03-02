<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence_prof extends Model
{
    use HasFactory;
    protected $fillable = [
        'MasseHoraire',
        'Proffesseur',
        'Date'
    ];

    public function profs(){
        $this->belongsTo(Prof::class,'id_prof');
    }
}
