<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiclesales extends Model
{
    protected $table = 'vehiclesales';
    protected $primaryKey = 'id';
    protected $fillable = [
            'make',
            'model' ,
            'chassisno', 
            'yearofmanufacture',
            'salesprice',
            'dateofsale',
            'buyername',
            'buyersddress',
            'paymentmethod',
            // 'Comments',
    ];
}