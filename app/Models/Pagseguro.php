<?php namespace App\Models;

use App\Models\ProdutoModel;
use App\Models\SolicitacaoPagamentoModel as SolicitacaoPagamento;


class Pagseguro
{

    public function __construct()
    {
        $this->email = getenv('pagseguro.email');
        $this->token = getenv('pagseguro.token');

        $this->url = "https://ws.".getenv('pagseguro.url')."/v2/checkout?email=".$this->email."&token=".$this->token."";
    }

    public function solicitarCodigoPagamento(object $produto)
    {
        $produtoModel = new ProdutoModel();
        
        $solicitacao_pagamento_model = new SolicitacaoPagamento();

        $produto->solicitacao_id = $solicitacao_pagamento_model->solicitar($produto->id);

        $produto->valor = $produtoModel->calculoValorFinalProduto($produto->valor);

        $string_post = $produtoModel->formatString($produto);

        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $string_post);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $retorno = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($retorno);
        
        $response = json_decode(json_encode($xml));

        $solicitacao_pagamento_model->setCodigoCheckout($produto->solicitacao_id , $response->code);

        return $response;
    }

    public function consultarDetalhesTransacao(string $transacao_id)
    {
    
        $url = "https://ws.".getenv('pagseguro.url')."/v3/transactions/".$transacao_id."?email=".$this->email."&token=".$this->token."";

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array());
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $retorno = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($retorno);
        
        $response = json_decode(json_encode($xml));
        // echo "<pre>";
        // print_r($response);die();

        return $response;
    }
}