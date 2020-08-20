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
        $usuarioModel = new UsuarioModel();

        try {
            $usuario = $usuarioModel->new($this->request->getPost());
        
        } catch (\Exception $th) {

            $this->session->setFlashdata(['mensagem', $th->getMessage()]);

            return redirect()->back();

        }
    }
}
