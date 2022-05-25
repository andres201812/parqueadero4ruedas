<?php

namespace App\Http\Controllers;

use App\Models\Tipovehiculo;
use Illuminate\Http\Request;

class TipovehiculoController extends Controller
{
    public function index()
    {
        $tipovehiculos = Tipovehiculo::all();
        return view('tipovehiculos.index',compact('tipovehiculos'));
    }

    public function create()
    {
        return view('tipovehiculos.create');
    }

    public function store(Request $request)
    {
		$this->validate($request,[
            'nombre' => 'required|unique:tipovehiculos,nombre|regex:/^[\pL\s\-]+$/u',
        ]);
		
		$tipovehiculo = Tipovehiculo::create($request->all());
		return redirect()->route('tipovehiculos.index')->with('successMsg','El registro se guardó exitosamente');
    }

    public function show(Tipovehiculo $tipovehiculo)
    {
        //
    }

    public function edit(Tipovehiculo $tipovehiculo)
    {
        return view('tipovehiculos.edit',compact('tipovehiculo'));
    }

    public function update(Request $request, Tipovehiculo $tipovehiculo)
    {
		$this->validate($request,[
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u',
        ]);
		
        $tipovehiculo->update($request->all());
        return redirect()->route('tipovehiculos.index')->with('successMsg','El registro se actualizó exitosamente');
    }
	
	public function destroy(Tipovehiculo $tipovehiculo)
    {
       $tipovehiculo->delete();
       return redirect()->route('tipovehiculos.index')->with('eliminar','ok');
    }
}