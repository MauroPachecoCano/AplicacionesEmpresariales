<?php namespace GestorImagenes\Http\Controllers;

class UsuarioController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getEditarPerfil()
	{
		return ('mostrar formulario');
	}

	public function postEditarPerfil(){
		return 'generando actualización de perfil';
	}
}
