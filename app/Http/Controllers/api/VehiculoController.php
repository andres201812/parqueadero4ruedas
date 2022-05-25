<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index()
    {
		$vehiculos = Vehiculo::select ('vehiculos.id as id','vehiculos.placa as placa','propietarios.nombre as propietario',
		'tipovehiculos.nombre as tipovehiculo','marcas.nombre as marca')
			->join('propietarios', 'propietarios.id', '=', 'vehiculos.propietario_id')
			->join('tipovehiculos', 'tipovehiculos.id', '=', 'vehiculos.tipovehiculo_id')
			->join('marcas', 'marcas.id', '=', 'vehiculos.marca_id')
			->get();
        return $vehiculos;
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Vehiculo $vehiculo)
    {
        
			
    }
}
