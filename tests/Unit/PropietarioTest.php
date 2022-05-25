<?php

namespace Tests\Unit;

use App\Models\Propietario;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class PropietarioTest extends TestCase
{
    public function test_a_propietario_has_many_vehiculos()
    {
		$propietario = new Propietario();
        $this->assertInstanceOf(collection::class, $propietario->vehiculos);
    }
}
