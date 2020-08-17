<?php namespace App\Controllers;

class Usuario extends BaseController
{
    public function new()
	{
        return view('cadastro');
    }
}
