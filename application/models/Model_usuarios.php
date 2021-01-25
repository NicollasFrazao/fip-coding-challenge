<?php
class Model_usuarios extends CI_Model
{
  public function get_all() 
  {
    return $this -> db -> get('usuarios')
                       -> result();
  }
}