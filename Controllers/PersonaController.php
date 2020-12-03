<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$datos = [
					"nombre" => "Alan",
					"correo" => "alandejesus98@hotmail.com",
					"escuela" => "Instituto Tecnologico de Tlahuac"
				];

		return view('persona', $datos);
	}

	public function persona()
	{

		$datos = [
			"nombre" => "Alan",
					"correo" => "alandejesus98@hotmail.com",
					"escuela" => "Instituto Tecnologico de Tlahuac"
				];

		return view('persona', $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}


	public function contacto1() {
		return view('contacto1');
	}


	public function contacto2() {
		return view('contacto2');
	}
}