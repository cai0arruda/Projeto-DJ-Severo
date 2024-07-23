<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <img src="assets/img/severopreto.png" class="logodashboard"></img>
    </header>

    <div class="bg-light tabela">
      <div class="container-fluid">
        <?php
        include "tabelaeventos.php";
        ?>
      </div>
    </div>
    <div class="tittleevento">
      <div>Novo Evento</div>
    </div>
    <form class="form-label" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <div for="data_evento" class="datalocal">Data do Evento</div>
          <input type="date" class="form-control" id="data_evento" name="data_evento">
        </div>
        <div class="col-md-4">
          <div for="local_evento" class="datalocal">Local do Evento</div>
          <input type="text" class="form-control" id="local_evento" name="local_evento">
        </div>
        <div class="botaoinserir">
        <button type="submit" class="btn1 btn-success" href="dashboard.php">Inserir Evento</button>
        </div>
        <?php
          include "form_inserir.php";
          ?>
      </div>
    </form>

    <div class="row align-items-md-stretch">
      <div class="col-md-6 novoevento">
      </div>
      <div class="col-md-6">
        <div class="sair">
          <a type="button" class="sairbotao" name="logout" href="sessionlogout.php"><img src="assets/img/sair.png"
              alt="Sair" class="sairicone"> Sair</a>
        </div>
      </div>
    </div>
  </div>
</main>