<!DOCTYPE html>
<html lang="pt" dir="pt-br">
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilo.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/normalize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Cadastrar novo paciente</title>
  </head>
  <body>
    <?php require_once('navbar.php'); # ONDE ESTÃO MODAL PARA PESQUISA E CONTEUDO (CRUD)
       # SEM USO NO CRUD ATÉ O MOMENTO
    ?>

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
