<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
  	{
		$authorization = new \PagSeguro\Domains\Requests\Authorization();

  		return view('bem_vindo');
	  }
}
