<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardocuments extends Model
{
    protected $table = 'cardocuments';
    protected $primaryKey = 'id';
    protected $fillable = ['logbook', 'registrationdocument', 'roadworthiness', 'document'];


    protected $casts = [
        'document' => 'binary',
    ];
}
