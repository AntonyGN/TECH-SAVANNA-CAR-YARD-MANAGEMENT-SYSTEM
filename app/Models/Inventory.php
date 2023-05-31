<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'Inventory';
    protected $primaryKey = 'id';
    protected $fillable = ['car-type', 'car-model', 'available-cars'];
}
