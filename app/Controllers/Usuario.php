<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller
{

    public function new()
	{
        return view('cadastro');
    }

    public function post()
	{
        $session = \Config\Services::session();

        $usuarioModel = new UsuarioModel();

        try {
            $usuario = $usuarioModel->new($this->request->getPost());
            
            return redirect()->to('/home');
            
        } catch (\Exception $th) {

            die($th->getMessage());
            $session->setFlashdata(['mensagem', $th->getMessage()]);

            return redirect()->back();

        }
    }
}
