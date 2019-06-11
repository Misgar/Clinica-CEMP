<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class ControllerAgenda extends CI_Controller{

    public function form_agendamento(){
      $this->load->view('agendaconsulta');
    }

    public function consulta_dadosagendamento(){
      $this->load->view('dadosagendamento');
    }
  }

  ?>
