<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class ModelConsulta extends CI_Model{
    public function exibir_consultas($cpf){
      return $this->db->get_where('pessoa', $cpf)->result();
    }
  }

  ?>
