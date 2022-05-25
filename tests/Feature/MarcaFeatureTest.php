<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Marca;

class MarcaFeatureTest extends TestCase
{
    /** @test */
    public function a_marca_can_be_created()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('marcas', [
			'nombre' => 'RENAULT'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Marca::all());
		
		$marca = Marca::first();
		
		$this->assertEquals($marca->nombre, 'RENAULT');
    }
	
	/** @test */
    public function marca_nombre_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('marcas', [
			'nombre' => ''
		]);
		
		$response->assertSessionHasErrors(['nombre']);
    }
	
	/** @test */
	public function list_of_marcas_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->get('marcas');
		
		$marcas = Marca::all();
		
		$response->assertOk();
		$this->assertViewIs('marcas.index');
		$this->assertViewHas('marcas', $marcas);
    }
	
	/** @test */
    public function a_marca_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$marca = Marca::first();
		
        $response = $this->get('marcas/' . $marca->id);
		
		$response->assertOk();
		$this->assertViewIs('marcas.show');
		$this->assertViewHas('marca', $marca);
    }
	
	/** @test */
    public function a_marca_can_be_updated()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$marca = Marca::first();
		
        $response = $this->put('marcas/' . $marca->id, [
			'nombre' => 'RENAULT'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Marca::all());
		
		$this->assertEquals($marca->nombre, 'RENAULT');
    }
	
	/** @test */
    public function a_marca_can_be_deleted()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$marca = Marca::first();
		
        $response = $this->delete('marcas/' . $marca->id);
		
		$response->assertOk();
		$this->assertCount(0, Marca::all());
    }
}
