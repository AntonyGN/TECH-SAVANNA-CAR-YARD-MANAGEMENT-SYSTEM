<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    protected $table = 'cardetails';
    protected $primaryKey = 'id';
    protected $fillable = [
            'make',
            'model' ,
            'fueltype', 
            'yearofmanufacture',
            'transmission',
            'chassisno',
    ];
}