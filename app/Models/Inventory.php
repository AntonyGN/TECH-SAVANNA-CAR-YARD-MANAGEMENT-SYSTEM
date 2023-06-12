<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $fillable = ['cartype', 'carmodel', 'availablecars', 'soldcars'];
}
