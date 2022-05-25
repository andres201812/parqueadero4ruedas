<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table = 'propietarios';
	
	protected $fillable = [
        'nombre','numerodocumento','direccion','celular','email',
    ];
	
	public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo');
    }
}
