<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipovehiculo;

class TipovehiculoController extends Controller
{
    public function index()
    {
		$tipovehiculos = all();
        return $tipovehiculos;
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

    public function destroy(Tipovehiculo $vehiculo)
    {
        
			
    }
}
