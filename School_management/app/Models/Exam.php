<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_exam';
    protected $fillable = [
        'Module',
        'Date'
    ];

    public function modules(){
        $this->belongsTo(Module::class,'id_module');
    }
}