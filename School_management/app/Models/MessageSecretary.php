<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageSecretary extends Model
{
    use HasFactory;
    protected $table = 'message_to_secrtary';
    protected $fillable = [
        'Message',
        'Etudiant'
    ];
}
