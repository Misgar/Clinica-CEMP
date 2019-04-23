<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class ModelPessoa extends CI_Model{

    public function insertPesssoa($dados){
      $this->db->insert('pessoa', $dados);
    }

    public function deletePessoa($id_pessoa){
      $this->db->where('id', $id_pessoa);
      $this->db->delete('pessoa');
    }

    public function updatePessoa($id_pessoa, $dados){
      $this->db->where('id', $id_pessoa);
      
    }
  }
