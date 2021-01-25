<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller 
{

  public function index()	
  {
    $this -> load -> model('model_empresas');

    $data['empresas'] = $this -> model_empresas -> get_all();
    
    $data['titulo'] = 'Empresas';

		$this -> load -> view('header/index', $data);
    $this -> load -> view('empresas/index', $data);
		$this -> load -> view('footer/index');
  }

  public function profile($id) 
  {
    echo "empresa id: " . $id;    
  }
}
