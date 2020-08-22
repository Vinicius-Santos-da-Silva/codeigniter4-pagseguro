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

        // print_r($this->request->getPost());die();
        try {
            
            $usuario = $usuarioModel->new($this->request->getPost());
        
        } catch (\Exception $th) {

            return $this->failValidationError($th->getMessage());
        }

        $usuario->status = 200;

        return $this->respond($usuario,200);
    }
}