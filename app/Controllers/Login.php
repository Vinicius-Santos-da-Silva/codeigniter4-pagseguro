<?php namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Login extends Controller
{

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
		$this->session = \Config\Services::session();	
    }
    
	public function index()
	{
        return view('login');
    }
    
    public function validar()
    {
        $usuarioModel = new UsuarioModel();
        
        $usuario = $usuarioModel->validaUsuario($this->request->getPost());
        
        if(!$usuario){
            return redirect()->to(site_url('/login'));
        }

        $this->session->set('usuario' , $usuario);
        
        return redirect()->to(site_url('/home'));
        
    }

    public function logout()
    {
        $this->session->destroy();

        return redirect()->to(site_url('/login'));
    }

    
}
