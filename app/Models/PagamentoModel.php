<?php namespace App\Models;

use CodeIgniter\Model;

use App\Models\UsuarioModel;
use App\Models\Pagseguro;
use App\Models\SolicitacaoPagamentoModel as SolicitacaoPagamento;
use App\Models\UsuarioHasProdutoModel as UsuarioHasProduto;


class PagamentoModel extends Model
{
    protected $table      = 'pagamento';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = [   'transacao_id', 'solicitacao_checkout_id' , 'datahora_cadastro' , 'datahora_atualizacao' , 'datahora_desativacao'];

    protected $useTimestamps = true;
    protected $createdField  = 'datahora_cadastro';
    protected $updatedField  = 'datahora_atualizacao';
    protected $deletedField  = 'datahora_desativacao';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function existeSolicitacao(string $solicitacao_pagamento_id)
    {
        return $this->where(['solicitacao_checkout_id' =>  $solicitacao_pagamento_id ])->first();
    }

    public function salvarPagamento(string $solicitacao_pagamento_id , string $codigo_pagamento_id)
    {
        $solicitacao_model = new SolicitacaoPagamento();

        $solicitacao = $solicitacao_model->find($solicitacao_pagamento_id);

        $usuario_has_produto = new UsuarioHasProduto();

        
        $usuario_has_produto->insert(array(
            'usuario_id' => $solicitacao->usuario_id,
            'produto_id' => $solicitacao->produto_id
        ));

        $pagamento_id = $this->insert(array(
            'solicitacao_checkout_id' =>  $solicitacao_pagamento_id,
            'transacao_id' =>  $codigo_pagamento_id,
            )
        );

        return $pagamento_id;
    }

}