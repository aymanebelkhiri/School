<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
use App\Models\Prof;
use App\Models\Filiére;

class Emploi extends Model
{
    use HasFactory;
    public function module () 
    {
        return $this->belongsTo(Module::class,'module_id');
    }
    public function prof (){
        return $this->belongsTo(Prof::class,'prof_id');
    }
    public function filiere() {
        return $this->belongsTo(Filiére::class,'filiére_id');
    }
}
