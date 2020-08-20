<?php namespace App\Controllers;

class Planos extends BaseController
{
	public function index()
	{
        return view('painel_planos');
	}
}