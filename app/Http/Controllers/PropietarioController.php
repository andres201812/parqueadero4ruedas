<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios = Propietario::all();
        return view('propietarios.index',compact('propietarios'));
    }

    public function create()
    {
        return view('propietarios.create');
    }

    public function store(Request $request)
    {
		$this->validate($request,[
            'nombre' => 'required|regex:/^[\pL\s\-]+$/u',
			'numerodocumento' => 'required|unique:propietarios,numerodocumento',
        ]);
		
		$propietario = Propietario::create($request->all());
		return redirect()->route('propietarios.index')->with('successMsg','El registro se guardó exitosamente');
    }

    public function show(Propietario $propietario)
    {
		//
    }

    public function edit(Propietario $propietario)
    {
        return view('propietarios.edit',compact('propietario'));
    }

    public function update(Request $request, Propietario $propietario)
    {
		$this->validate($request,[
            'nombre' => 'required|regex:/^[\pL\s\-]+$/u',
			'numerodocumento' => 'required',
        ]);
		
        $propietario->update($request->all());
        return redirect()->route('propietarios.index')->with('successMsg','El registro se actualizó exitosamente');
    }
	
	public function destroy(Propietario $propietario)
    {
		$propietario->delete();
		return redirect()->route('propietarios.index')->with('eliminar','ok');
    }
}