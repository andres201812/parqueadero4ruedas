<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
	
	protected $fillable = [
        'placa','tipovehiculo_id','marca_id','propietario_id',
    ];
	
	public function tipovehiculo()
    {
        return $this->belongsTo(Tipovehiculo::class, 'tipovehiculo_id');
    }
	
	public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
	
	public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'propietario_id');
    }
}
