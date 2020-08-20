<?php namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table      = 'produto';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nome', 'descricao' , 'valor'];

    protected $useTimestamps = true;
    protected $createdField  = 'datahora_cadastro';
    protected $updatedField  = 'datahora_atualizacao';
    protected $deletedField  = 'datahora_desativacao';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function formatString(object $produto)
    {

        $produto->valor = number_format($produto->valor, 2, '.', '');


        $string = "";
        $string .= "currency=BRL&";
        $string .= "itemId1=$produto->id&";
        $string .= "itemDescription1=$produto->descricao&";
        $string .= "itemQuantity1=1&";
        $string .= "itemAmount1=$produto->valor";

        return $string;

    }

}