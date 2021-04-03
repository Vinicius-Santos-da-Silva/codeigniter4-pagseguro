<?php namespace App\Controllers;

use CodeIgniter\Controller;

// class Home extends Controller
class Home extends BaseController
{
	public function index()
  	{  
  		return view('bem_vindo');
	}
}
