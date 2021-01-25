<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()	
	{
		$data['titulo'] = 'Home Page';

		$this -> load -> view('header/index', $data);
		$this -> load -> view('home/index');
		$this -> load -> view('footer/index');
  	}	
}
