<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_module';
    protected $fillable = [
        'Nom',
        'MasseHoraire',
        'Coefficient',
        'description',
        'price',
        'Filiére'
    ];

    public function Filiéres(){
        $this->belongsTo(Filiére::class,'id');
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }
}
