<!DOCTYPE html>
<html lang="pt" dir="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilo.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/normalize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Agendar Consulta</title>
  </head>
  <body>
    <?php require_once('navbar.php'); # ONDE ESTÃO MODAL PARA PESQUISA E CONTEUDO (CRUD)

    ?>

    <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="plaintext">Insira nome do paciente</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="email">
      </div>
      <div class="form-group col-md-6">
        <label for="plaintext">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome">
      </div>
    </div>
    <div class="form-group col-md-8">
      <label for="inputAddress">cpf (sem pontos)</label>
      <input type="text" class="form-control" id="cpf" placeholder="Insira CPF">
    </div>


    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
