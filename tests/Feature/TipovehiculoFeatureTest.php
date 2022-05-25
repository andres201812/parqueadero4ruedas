<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tipovehiculo;

class TipovehiculoFeatureTest extends TestCase
{
    /** @test */
    public function a_tipovehiculo_can_be_created()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('tipovehiculos', [
			'nombre' => 'MOTOCARRO'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Tipovehiculo::all());
		
		$tipovehiculo = Tipovehiculo::first();
		
		$this->assertEquals($tipovehiculo->nombre, 'MOTOCARRO');
    }
	
	/** @test */
    public function tipovehiculo_nombre_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('tipovehiculos', [
			'nombre' => ''
		]);
		
		$response->assertSessionHasErrors(['nombre']);
    }
	
	/** @test */
	public function list_of_tipovehiculos_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->get('tipovehiculos');
		
		$tipovehiculos = Tipovehiculo::all();
		
		$response->assertOk();
		$this->assertViewIs('tipovehiculos.index');
		$this->assertViewHas('tipovehiculos', $tipovehiculos);
    }
	
	/** @test */
    public function a_tipovehiculo_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$tipovehiculo = Tipovehiculo::first();
		
        $response = $this->get('tipovehiculos/' . $tipovehiculo->id);
		
		$response->assertOk();
		$this->assertViewIs('tipovehiculos.show');
		$this->assertViewHas('tipovehiculo', $tipovehiculo);
    }
	
	/** @test */
    public function a_tipovehiculo_can_be_updated()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$tipovehiculo = Tipovehiculo::first();
		
        $response = $this->put('tipovehiculos/' . $tipovehiculo->id, [
			'nombre' => 'MOTOCARRO'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Tipovehiculo::all());
		
		$this->assertEquals($tipovehiculo->nombre, 'MOTOCARRO');
    }
	
	/** @test */
    public function a_tipovehiculo_can_be_deleted()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$tipovehiculo = Tipovehiculo::first();
		
        $response = $this->delete('tipovehiculos/' . $tipovehiculo->id);
		
		$response->assertOk();
		$this->assertCount(0, Tipovehiculo::all());
    }
}
