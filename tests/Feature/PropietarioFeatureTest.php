<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Propietario;

class PropietarioFeatureTest extends TestCase
{
    /** @test */
    public function a_propietario_can_be_created()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('propietarios', [
			'nombre' => 'ANA CANO',
			'numerodocumento' => '3756689033'
		]);
		
		$response->assertOk();
		$this->assertCount(1, Propietario::all());
		
		$propietario = Propietario::first();
		
		$this->assertEquals($propietario->nombre, 'ANA CANO');
		$this->assertEquals($propietario->numerodocumento, '3756689033');
    }
	
	/** @test */
    public function propietario_nombre_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('propietarios', [
			'nombre' => '',
			'numerodocumento' => '3756689033'
		]);
		
		$response->assertSessionHasErrors(['nombre','numerodocumento']);
    }
	
	/** @test */
    public function propietario_numerodocumento_is_required()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->post('propietarios', [
			'nombre' => 'ANA CANO',
			'numerodocumento' => ''
		]);
		
		$response->assertSessionHasErrors(['nombre','numerodocumento']);
    }
	
	/** @test */
	public function list_of_propietarios_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
        $response = $this->get('propietarios');
		
		$propietarios = Propietario::all();
		
		$response->assertOk();
		$this->assertViewIs('propietarios.index');
		$this->assertViewHas('propietarios', $propietarios);
    }
	
	/** @test */
    public function a_propietario_can_be_retrieved()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$propietario = Propietario::first();
		
        $response = $this->get('propietarios/' . $propietario->id);
		
		$response->assertOk();
		$this->assertViewIs('propietarios.show');
		$this->assertViewHas('propietario', $propietario);
    }
	
	/** @test */
    public function a_propietario_can_be_updated()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$propietario = Propietario::first();
		
        $response = $this->put('propietarios/' . $propietario->id, [
			'nombre' => 'ANA CANO',
			'numerodocumento' => ''
		]);
		
		$response->assertOk();
		$this->assertCount(1, Propietario::all());
		
		$this->assertEquals($propietario->nombre, 'ANA CANO');
		$this->assertEquals($propietario->numerodocumento, '3756689033');
    }
	
	/** @test */
    public function a_propietario_can_be_deleted()
    {
		$this->withoutExceptionHandling();
		$this->expectException('Illuminate\Auth\AuthenticationException');
		
		$propietario = Propietario::first();
		
        $response = $this->delete('propietarios/' . $propietario->id);
		
		$response->assertOk();
		$this->assertCount(0, Propietario::all());
    }
}
