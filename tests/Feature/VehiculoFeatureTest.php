<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Vehiculo;
use App\Models\Propietario;
use App\Models\Marca;
use App\Models\Tipovehiculo;

class VehiculoFeatureTest extends TestCase
{
    /** @test */
    public function a_vehiculo_can_be_created()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('vehiculos', [
			'tipovehiculo_id' => '1',
			'marca_id' => '2',
			'propietario_id' => '1',
			'placa' => 'HRT446'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Vehiculo::all());
		
		$vehiculo = Vehiculo::first();
		
		$this->assertEquals($vehiculo->tipovehiculo_id, '1');
		$this->assertEquals($vehiculo->marca_id, '2');
		$this->assertEquals($vehiculo->propietario_id, '1');
		$this->assertEquals($vehiculo->placa, 'HRT446');
    }
	
	/** @test */
    public function vehiculo_tipovehiculo_id_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('vehiculos', [
			'tipovehiculo_id' => '',
			'marca_id' => '2',
			'propietario_id' => '1',
			'placa' => 'HRT446'
		]);
		
		$response->assertSessionHasErrors(['tipovehiculo_id','marca_id','propietario_id','placa']);
    }
	
	/** @test */
    public function vehiculo_marca_id_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('vehiculos', [
			'tipovehiculo_id' => '1',
			'marca_id' => '',
			'propietario_id' => '1',
			'placa' => 'HRT446'
		]);
		
		$response->assertSessionHasErrors(['tipovehiculo_id','marca_id','propietario_id','placa']);
    }
	
	/** @test */
    public function vehiculo_propietario_id_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('vehiculos', [
			'tipovehiculo_id' => '1',
			'marca_id' => '2',
			'propietario_id' => '',
			'placa' => 'HRT446'
		]);
		
		$response->assertSessionHasErrors(['tipovehiculo_id','marca_id','propietario_id','placa']);
    }
	
	/** @test */
    public function vehiculo_placa_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('vehiculos', [
			'tipovehiculo_id' => '1',
			'marca_id' => '2',
			'propietario_id' => '1',
			'placa' => ''
		]);
		
		$response->assertSessionHasErrors(['tipovehiculo_id','marca_id','propietario_id','placa']);
    }
	
	/** @test */
	public function list_of_vehiculos_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->get('vehiculos');
		
		$vehiculos = Vehiculo::all();
		
		$response->assertOk();
		$this->assertViewIs('vehiculos.index');
		$this->assertViewHas('vehiculos', $vehiculos);
    }
	
	/** @test */
    public function a_vehiculo_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$vehiculo = Vehiculo::first();
		
        $response = $this->get('vehiculos/' . $vehiculo->id);
		
		$response->assertOk();
		$this->assertViewIs('vehiculos.show');
		$this->assertViewHas('vehiculo', $vehiculo);
    }
	
	/** @test */
    public function a_vehiculo_can_be_updated()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$vehiculo = Vehiculo::first();
		
        $response = $this->put('vehiculos/' . $vehiculo->id, [
			'tipovehiculo_id' => '1',
			'marca_id' => '2',
			'propietario_id' => '1',
			'placa' => 'HRT446'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Vehiculo::all());
		
		$this->assertEquals($vehiculo->tipovehiculo_id, '1');
		$this->assertEquals($vehiculo->marca_id, '2');
		$this->assertEquals($vehiculo->propietario_id, '1');
		$this->assertEquals($vehiculo->placa, 'HRT446');
    }
	
	/** @test */
    public function a_vehiculo_can_be_deleted()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$vehiculo = Vehiculo::first();
		
        $response = $this->delete('vehiculos/' . $vehiculo->id);
		
		$response->assertOk();
		$this->assertCount(0, Vehiculo::all());
    }
}
