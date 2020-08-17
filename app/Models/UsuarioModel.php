<?php namespace App\Models;

use CodeIgniter\Model;

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
            return false;
        }

        if(!isset($dados['email'])){
            throw new \Exception("Email inválido.", 1);
        }

        if(!isset($dados['senha'])){
            throw new \Exception("Senha inválida.", 1);
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
}