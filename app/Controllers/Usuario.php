<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuario extends BaseController
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
