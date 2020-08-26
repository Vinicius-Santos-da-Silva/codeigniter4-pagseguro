<?php namespace App\Models;

use CodeIgniter\Model;

use App\Models\UsuarioModel;
use App\Models\Pagseguro;


class SolicitacaoPagamentoModel extends Model
{
    protected $table      = 'solicitacao_pagamento';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario_id' , 'produto_id', 'codigo_checkout' , 'datahora_cadastro' , 'datahora_atualizacao' , 'datahora_desativacao'];

    protected $useTimestamps = true;
    protected $createdField  = 'datahora_cadastro';
    protected $updatedField  = 'datahora_atualizacao';
    protected $deletedField  = 'datahora_desativacao';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function setCodigoCheckout(string $solicitacao_id , string $codigo_checkout )
    {
        $this->update($solicitacao_id , ['codigo_checkout' => $codigo_checkout]);
    }

    public function solicitar(int $produto_id)
    {
        $usuario_model = new UsuarioModel();

        $usuario = $usuario_model->getUsuarioSessao();

        return $this->insert(
            array(
                'produto_id' => $produto_id,
                'usuario_id' => $usuario->id
            )
        );
    }

}