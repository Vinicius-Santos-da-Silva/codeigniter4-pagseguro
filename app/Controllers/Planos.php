<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Planos extends Controller
{
	public function index()
	{
        return view('painel_planos');
	}
}