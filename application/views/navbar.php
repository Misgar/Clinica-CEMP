<!-- arquivo da barra de navegação, puxado por require-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Clinica Cemp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/controlleragenda/form_agendamento');?>">Marcar Consulta</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/controlleragenda/consulta_dadosagendamento');?>" data-toggle="modal" data-target="#modalConsulta">Verificar Consultas Marcadas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>

    <!-- Modal  para Consultas-->
    <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="labelModalConsulta" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelModalConsulta">Pesquisar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- FORM PARA PEGAR CPF E PESQUISAR -->
          <div class="modal-body">
            <form class="form-inline" action="<?php echo base_url('index.php/controlleragenda/enviacpf') ?>" method="POST">

                <div class="form-group mb-2">
                  <label  class="sr-only">CPF</label>
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Confirme o cpf">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="CPF" class="sr-only">Insira cpf para pesquisa</label>
                  <input type="text" class="form-control" id="CPF" placeholder="Insira CPF para pesquisar" name="cpf">
                </div>

          </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary" method="POST">Consultar</button> <!-- BOTAO PARA ENVIAR VALOR DO FORMULARIO -->
                </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</nav>
