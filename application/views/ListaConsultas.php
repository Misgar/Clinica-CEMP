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
      require_once('sidebar.php'); # SEM USO NO CRUD ATÉ O MOMENTO
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
