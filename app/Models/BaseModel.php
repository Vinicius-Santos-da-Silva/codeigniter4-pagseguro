<?php namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{

    public function __construct()
    {
		  $this->session = \Config\Services::session();
    }
}