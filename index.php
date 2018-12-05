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
        <h1>Últimos Pedidos</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="input-group mb-3 col">  
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Cliente</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col">
                    <select class="form-control">
                        <option>--Selecione o Status--</option>
                        <option>Finalizado</option>
                        <option>Cancelado</option>
                        <option>Emitido</option>
                    </select>
                </div>
                    <div>
                        <button type="button" class="btn btn-info">Filtrar</button>
                    </div>
                </div>
            </div>  
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Num Pedido</th>
                    <th>Cliente</th>
                    <th>Data do Pedido</th>
                    <th>Status </th>
                    <th>Data da Atualização</th>
                    <th>Usuario Atualização</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1010</td>
                    <td>ABC</td>
                    <td>10/10/2010</td>
                    <td>Emitido</td>
                    <td>11/10/2010 12:20:20</td>
                    <td>Felipe</td>
                </tr>
            </tbody>
        </table>
        
      </div>

    </main><!-- /.container -->
        <?php
        // put your code here
        ?>
    </body>
</html>
