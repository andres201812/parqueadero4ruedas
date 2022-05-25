<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Tipovehiculo;
use App\Models\Marca;
use App\Models\Propietario;
use Illuminate\Http\Request;
use DB;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
		$vehiculos = Vehiculo::all();
        return view('vehiculos.index',compact('vehiculos'));
    }

    public function create()
    {
		$tipovehiculos = Tipovehiculo::orderBy('nombre')->get();
		$marcas = Marca::orderBy('nombre')->get();
		$propietarios = Propietario::orderBy('nombre')->get();
        return view('vehiculos.create',compact('tipovehiculos','marcas','propietarios'));
    }

    public function store(Request $request)
    {
		$this->validate($request,[
			'tipovehiculo_id' => 'required',
			'nombre' => 'required',
			'numerodocumento' => 'required',
			'marca_id' => 'required',
            'placa' => 'required|unique:vehiculos,placa',
        ]);
		
		try {
			$propietario = new Propietario();
			$propietario->nombre = $request->nombre;
			$propietario->numerodocumento = $request->numerodocumento;
			$propietario->email = $request->email;
			$propietario->direccion = $request->direccion;
			$propietario->celular = $request->celular;
			$propietario->save();
		
			$idpropietario = $propietario->id;
			
			$vehiculo = new Vehiculo();
			$vehiculo->tipovehiculo_id = $request->tipovehiculo_id;
			$vehiculo->marca_id = $request->marca_id;
			$vehiculo->propietario_id = $idpropietario;
			$vehiculo->placa = $request->placa;
			$vehiculo->save();	
		} catch (ModelNotFoundException $exception) {
			return redirect()->route('vehiculos.index')->with('successMsg','Error al realizar el registro');
		}
		return redirect()->route('vehiculos.index')->with('successMsg','El registro se guardó exitosamente');
    }

    public function show(Vehiculo $vehiculo)
    {
		//
    }

    public function edit(Vehiculo $vehiculo)
    {
        $tipovehiculos = Tipovehiculo::all();
		$marcas = Marca::all();
		$propietarios = Propietario::all();
        return view('vehiculos.edit',compact('vehiculo','tipovehiculos','marcas','propietarios'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
		$this->validate($request,[
            'tipovehiculo_id' => 'required',
			'propietario_id' => 'required',
			'marca_id' => 'required',
            'placa' => 'required',
        ]);
		
        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index')->with('successMsg','El registro se actualizó exitosamente');
    }
	
	public function destroy($id)
    {
		$vehiculo = Vehiculo::find($id);
		$propietario = Propietario::find($vehiculo->propietario_id);
		$vehiculo->delete();
		$propietario->delete();
		return redirect()->route('vehiculos.index')->with('eliminar','ok');
    }
	
	public function count(Request $request)
    {
		$cantidades = DB::table('vehiculos')
			->select(DB::raw('marcas.nombre AS marca, marcas.id AS id, count(vehiculos.marca_id) AS cantidad'))
			->join('marcas', 'marcas.id', '=', 'vehiculos.marca_id')
			->groupBy('marcas.nombre','marcas.id')
			->distinct()
			->get();
        return view('vehiculos.count',compact('cantidades'));
		//ucfirst primera letra en mayusucula
    }
}