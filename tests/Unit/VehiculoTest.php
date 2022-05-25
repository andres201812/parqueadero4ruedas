<?php

namespace Tests\Unit;

use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Tipovehiculo;
use App\Models\Propietario;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class VehiculoTest extends TestCase
{
    public function test_a_vehiculo_belongs_to()
    {
		$vehiculo = new Vehiculo();
        $this->assertInstanceOf(Vehiculo::class, $vehiculo);
    }
}
