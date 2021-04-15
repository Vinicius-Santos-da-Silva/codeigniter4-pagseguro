<?php namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Test extends Controller
{

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
		$this->session = \Config\Services::session();	
    }
    
	public function index()
	{
        echo PHP_EOL;
        echo "teste env.";
        echo PHP_EOL;

        die(getenv($_GET['q']));
    }
    
}
