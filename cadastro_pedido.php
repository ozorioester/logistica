<?php

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Logística</title>
        <link href="css/bootstrap.css" rel="stylesheet"  type="text/css"/>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Logística</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cadastrar Novo</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Cadastrar Pedidos</h1>
        <form class="form-horizontal">
<fieldset class="col-6 offset-3">

<!-- Form Name -->
<legend>Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="num_pedido">Número do Pedido</label>
  <div>
  <input id="num_pedido" name="num_pedido" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class=" control-label" for="cliente">Cliente</label>
  <div>
  <input id="cliente" name="cliente" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="data_pedido">Data do Pedido</label>
  <div>
  <input id="data_pedido" name="data_pedido" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="control-label" for="status">Status</label>
  <div>
    <select id="status" name="status" class="form-control">
      <option value="Aberto">Aberto</option>
      <option value="Cancelado">Cancelado</option>
      <option value="Emitido">Emitido</option>
      <option value="Entregue">Entregue</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="control-label" for="observacoes">Observações</label>
  <div>
    <textarea class="form-control" id="observacoes" name="observacoes"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="control-label" for="enviar"></label>
  <div>
    <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>



      </div>

    </main><!-- /.container -->
        <?php
        // put your code here
        ?>
    </body>
</html>
