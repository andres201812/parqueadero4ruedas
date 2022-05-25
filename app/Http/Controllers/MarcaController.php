<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index',compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
		$this->validate($request,[
            'nombre' => 'required|unique:marcas,nombre|regex:/^[\pL\s\-]+$/u',
        ]);
		
		$marca = Marca::create($request->all());
		return redirect()->route('marcas.index')->with('successMsg','El registro se guardó exitosamente');
    }

    public function show(Marca $marca)
    {
        //
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit',compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
		$this->validate($request,[
            'nombre'=>'required|unique:marcas,nombre|regex:/^[\pL\s\-]+$/u',
        ]);
		
        $marca->update($request->all());
        return redirect()->route('marcas.index')->with('successMsg','El registro se actualizó exitosamente');
    }
	
	public function destroy(Marca $marca)
    {
       $marca->delete();
       return redirect()->route('marcas.index')->with('eliminar','ok');
    }
}