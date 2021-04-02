<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
  	{

		try {
			throw new \Exception("Error Processing Request 111111111111111111111", 1);
		} catch (\Throwable $th) {
			try {
				throw new \Exception("Error Processing Request 2222222222222222222222", 1 , $th);
			} catch (\Throwable $th2) {
				throw new \Exception("Error Processing Request 33333333333333333333333333333", 1 , $th2);
			}
		}
		  
  		return view('bem_vindo');
	}
}
