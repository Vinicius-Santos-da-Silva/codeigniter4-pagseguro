<?php namespace App\Controllers\API;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

use App\Models\UsuarioModel;

class UsuarioAPI extends Controller
{
    use ResponseTrait;

    public function new()
    {
        $usuarioModel = new UsuarioModel();

        try {
            
            $usuario = $usuarioModel->new($this->request->getPost());
        
        } catch (\Exception $th) {

            return $this->failValidationError($th->getMessage());
        }

        $usuario->status = 200;

        return $this->respond($usuario,200);
    }

    public function atualizar($id)
    {

        $usuario_model = new UsuarioModel();
        $usuario = $usuario_model->find($id);

        if(!$usuario){
            return $this->failValidationError('Usuário inválido');
        }
                
        $usuario_up['nome'] = $this->request->getVar('nome');
        $usuario_up['estado'] = $this->request->getVar('estado');
        $usuario_up['cidade'] = $this->request->getVar('cidade');

        $usuario_model->update($usuario->id , $usuario_up);

        $usuario = $usuario_model->find($id);

        $this->session = \Config\Services::session();   
        $this->session->set('usuario' , $usuario);
        
        return $this->respond($usuario);
    }
}