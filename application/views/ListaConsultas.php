<!DOCTYPE html>
<html lang="pt" dir="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilo.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/normalize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Lista de pacientes - Doutor</title>
  </head>
  <body>
    <?php require_once('navbar.php'); # ONDE ESTÃO MODAL PARA PESQUISA E CONTEUDO (CRUD)
     # SEM USO NO CRUD ATÉ O MOMENTO
    ?>

    <!-- CODIGO TABELA QUE DEVERA SER USADO COM FOR EACH -->
    <!-- NECESSARIO PASSAR O ID USADO NO BANCO PARA OS LINKS DE ALTERAR E EXCLUIR -->
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Consulta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>EXEMPLO</td>
      <td>Otto</td>
      <td>EX</td>
      <td> <a href="#" data-target="#ModalAlterar" data-toggle="modal" class="text-success"> Alterar </a> <td>
        <td> <a href="#" data-target="#ModalExcluir" data-toggle="modal" class="text-danger"> Excluir </a> <td>
    </tr>

  </tbody>
</table>

<div class="modal" tabindex="-1" role="dialog" id="ModalAlterar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="ModalExcluir">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="col-12">Confirma exclusão?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger col-3">Confirmar e Excluir</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
