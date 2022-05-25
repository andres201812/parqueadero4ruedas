<?php

namespace Tests\Unit;

use App\Models\Marca;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;

class MarcaTest extends TestCase
{
    public function test_a_marca_has_many_vehiculos()
    {
		$marca = new Marca();
        $this->assertInstanceOf(collection::class, $marca->vehiculos);
    }
}
