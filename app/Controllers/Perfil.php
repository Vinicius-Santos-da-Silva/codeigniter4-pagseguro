<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Perfil extends BaseController
{
	public function index()
  	{
        $usuarioModel = new UsuarioModel();

        $usuario = $usuarioModel->getUsuarioSessao();

  		return view('meu_perfil' , ['usuario' => $usuario]);
	}
}
