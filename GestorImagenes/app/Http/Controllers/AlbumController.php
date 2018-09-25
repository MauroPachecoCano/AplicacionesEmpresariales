<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex()
	{
		return view('mostrando Albumes del usuario');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearFoto(){
		return 'formulario de de crear Albumes';
	}
	public function postCrearFoto(){
		return 'almacenando Album';
	}
	public function getActualizarFoto(){
		return 'formulario de actualizar Album';
	}
	public function postActualizarFoto(){
		return 'actualizar Album';
	}
	public function getEliminarFoto(){
		return 'actualizar de eliminar Album';
	}
	public function postEliminarFoto(){
		return 'eliminando Album';
	}

}