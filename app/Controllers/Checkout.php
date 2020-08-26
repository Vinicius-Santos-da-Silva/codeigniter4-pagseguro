<?php namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Models\Pagseguro;
use App\Models\UsuarioModel;
use App\Models\SolicitacaoPagamentoModel as SolicitacaoPagamento;
use App\Models\PagamentoModel as PagamentoModel;

header("access-control-allow-origin: https://".getenv('pagseguro.url')."");

class Checkout extends BaseController
{
	public function index(int $id)
  	{
        $produtoModel = new ProdutoModel();

        $usuario_model = new UsuarioModel();

        if($usuario_model->hasPlano($id))
        {
            die("Você já possui este plano.");
        }

        $pagseguroModel = new Pagseguro();

        $produto = $produtoModel->find($id);
       
        $resposta = $pagseguroModel->solicitarCodigoPagamento($produto);

        return redirect()->to("https://".getenv('pagseguro.url')."/v2/checkout/payment.html?code=".$resposta->code);
    }    

    public function notificacao()
    {
        $transacao_id = $this->request->getVar('transacao_id');
        
        $solicitacao_checkout_model = new SolicitacaoPagamento();
        
        $pagseguro_model = new Pagseguro();

        $transacao_pagseguro = $pagseguro_model->consultarDetalhesTransacao($transacao_id);

        $pagamento_model = new PagamentoModel();

        $pagamento = $pagamento_model->existeSolicitacao($transacao_pagseguro->reference);

        if($pagamento){
            return redirect()->to(\site_url('/'));
            die('Já existe registro desta transação.');
        }

        $pagamento = $pagamento_model->salvarPagamento($transacao_pagseguro->reference , $transacao_pagseguro->code);

        return redirect()->to(\site_url('/'));
    }

    public function sucesso()
    {
        die('sucesso');
    }
}


