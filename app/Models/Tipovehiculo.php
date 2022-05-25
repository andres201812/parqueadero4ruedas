<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipovehiculo extends Model
{
    protected $table = 'tipovehiculos';
	
	protected $fillable = [
        'nombre',
    ];
	
	public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo');
    }
}
