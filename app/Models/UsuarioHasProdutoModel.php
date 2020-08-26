<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioHasProdutoModel extends Model
{
    protected $table      = 'usuario_has_produto';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario_id', 'produto_id' , 'datahora_cadastro'];

    protected $useTimestamps = true;
    protected $createdField  = 'datahora_cadastro';
    protected $updatedField  = 'datahora_atualizacao';
    protected $deletedField  = 'datahora_desativacao';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}