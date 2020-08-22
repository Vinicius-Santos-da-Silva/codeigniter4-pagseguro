<?php namespace App\Models;

use App\Models\ProdutoModel;


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

        return $response;
    }
}