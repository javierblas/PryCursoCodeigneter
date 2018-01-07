<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/libs/bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <span><h1>Formulario de Registro de Doc. Cobro</h1></span>
    <br/>
    <br/>
    
    <div class="container">
        <form class="form-horizontal" rol="form"  method="POST">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Empleado:</label>
            <div class="col-sm-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre del Empleado" aria-label="Nombre del Empleado" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Buscar</button>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Empresa:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Oficina:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Caja:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
            </div>
        </div>

            <div id="TablaDetalle">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </form>
    </div>


<div class="modal fade" id="ClientesModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"> Buscar Cliente</h4>
        </div>
        <div class="modal-body">
		<table id="TabalClientes" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Cliente</th>
                <th>Documento</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        </div>
      </div>
    </div>
  </div> 

    <script src="/public/libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="/public/libs/bootstrap/bootstrap.min.js"></script>
</body>
</html>