<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\UsuarioHasProdutoModel;
use App\Models\ProdutoModel;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nome', 'email' , 'senha'];

    protected $useTimestamps = true;
    protected $createdField  = 'datahora_cadastro';
    protected $updatedField  = 'datahora_atualizacao';
    protected $deletedField  = 'datahora_desativacao';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function new($dados)
    {

        if(!isset($dados['nome'])){
            throw new \Exception("Nome inválido.", 1);
        }

        if(!isset($dados['email'])){
            throw new \Exception("Email inválido.", 1);
        }

        if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Email inválido [1].", 1);
        }

        if(!isset($dados['senha'])){
            throw new \Exception("Senha inválida.", 1);
        }

        if(strlen($dados['senha']) < 8){
            throw new \Exception("A senha deve conter no mínimo 8 caracteres.", 1);
        }

        if(!isset($dados['confirmar_senha'])){
            throw new \Exception("As senhas não conferem.", 1);
        }

        $dados['senha'] = hash('sha256', $dados['senha']);
        $dados['confirmar_senha'] = hash('sha256', $dados['confirmar_senha']);

        $usuario = $this->where(['email' => trim($dados['email'])])->first();

        if($usuario){
            throw new \Exception("Já existem usuário cadastrado com este email.", 1);
        }

        if($dados['senha'] != $dados['confirmar_senha']){
            throw new \Exception("As senhas não conferem.", 1);
        }

        $id = $this->insert($dados);

        $usuario = $this->find($id);

        return $usuario;
    }

    public function validaUsuario(array $dados)
    {
        if(!isset($dados['email'])){
            return false;
        }

        if(!isset($dados['senha'])){
            return false;
        }

        $dados['senha'] = hash('sha256', $dados['senha']);

        $usuario = $this->where(['email' => trim($dados['email'])])->first();

        if(!$usuario){
            return false;
        }

        if(trim($dados['senha']) != $usuario->senha){
            return false;
        }

        return $usuario;
    }

    public function estaLogado()
    {
        $session = \Config\Services::session();
        
        $usuario = $session->get('usuario');

        if(!$usuario || empty($usuario)){
            return false;
        }

        return true;
    }

    public function getUsuarioSessao()
    {
        $session = \Config\Services::session();
        
        $usuario = $session->get('usuario');

        return $usuario;
    }

    public function hasPlano(int $id_plano)
    {

        if(!$this->estaLogado()){
            return false;
        }

        $produto_model = new ProdutoModel();

        $produto = $produto_model->find($id_plano);

        if (!$produto) {
            return false;
        }

        $usuario = $this->getUsuarioSessao();

        $usuario_has_plano_model = new UsuarioHasProdutoModel();

        $planos_usuario_rl = $usuario_has_plano_model->where(['usuario_id' => $usuario->id , 'produto_id' => $id_plano])->first();

        $planos_usuario_rl_last = $usuario_has_plano_model->where(['usuario_id' => $usuario->id])->orderBy('produto_id desc')->find();


        foreach ($planos_usuario_rl_last as $key => $rl) {

            if($rl->produto_id >= $id_plano){
                return true;
            }
            
        }

        if(!$planos_usuario_rl){
            return false;
        }

        return true;
    }

    public function valoresPagos()
    {

        if(!$this->estaLogado()){
            return 0.0;
        }

        $usuario = $this->getUsuarioSessao();

        $usuario_has_plano_model = new UsuarioHasProdutoModel();

        $planos_usuario_rl = $usuario_has_plano_model->where(['usuario_id' => $usuario->id])->orderBy('produto_id desc')->first();

        if(!$planos_usuario_rl){
            return 0.00;
        }
        
        $produto_model = new ProdutoModel();

        $valorTotal = 0.000;
        
        $produto = $produto_model->find($planos_usuario_rl->produto_id);

        $valorTotal += $produto->valor;

        return $valorTotal;

    }
}







