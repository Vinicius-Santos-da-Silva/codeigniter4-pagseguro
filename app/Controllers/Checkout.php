<?php namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Models\Pagseguro;

header("access-control-allow-origin: https://".getenv('pagseguro.url')."");

class Checkout extends BaseController
{
	public function index($id)
  	{

        $produtoModel = new ProdutoModel();

        $pagseguroModel = new Pagseguro();

        $produto = $produtoModel->find($id);
       
        $resposta = $pagseguroModel->solicitarCodigoPagamento($produto);

        return redirect()->to("https://".getenv('pagseguro.url')."/v2/checkout/payment.html?code=".$resposta->code);
    }    

    public function notificacao()
    {
        die('notificacao');
    }

    public function sucesso()
    {
        die('sucesso');
    }
}


