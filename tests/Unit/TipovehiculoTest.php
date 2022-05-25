<?php

namespace Tests\Unit;

use App\Models\Tipovehiculo;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class TipovehiculoTest extends TestCase
{
    public function test_a_tipovehiculo_has_many_vehiculos()
    {
		$tipovehiculo = new Tipovehiculo();
        $this->assertInstanceOf(collection::class, $tipovehiculo->vehiculos);
    }
}
