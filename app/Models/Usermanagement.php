<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermanagement extends Model
{
    protected $table = 'usermanagement';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',

    ];

    
}
