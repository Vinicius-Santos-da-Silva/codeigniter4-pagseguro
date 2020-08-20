<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioHasProdutoModel;
use App\Models\UsuarioModel;
class Planos extends Controller
{
	public function index()
	{

        $this->session = \Config\Services::session();

        $usuario = $this->session->get('usuario');

        $usuarioModel = new UsuarioModel();

        if ($usuarioModel->estaLogado()){

            $usuariHasProduto = new UsuarioHasProdutoModel();
            
            $produtosHasUsuario = $usuariHasProduto->where(['usuario_id' => $usuario->id])->find();

        }

        
        return view('painel_planos');
	}
}