
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<?php
  require('componentes/navar.php');
?>
<?php
  require('componentes/productos.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="./proceso.php" method="POST">
                        <div class="form-group mt-3">
                                <label for="">Operacion</label>
                                <select name="operacion" id="" class="form-select" required>
                                    <option value="" disabled selected>Seleccione operacion...</option>
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicacion</option>
                                    <option value="division">Division</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Numero 1</label>
                                <input type="text" name="numero_1" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Numero 2</label>
                                <input type="text" name="numero_2" class="form-control"required>
                            </div>
                            <button class="btn btn-success w-100 mt-3">operar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>

<?php
 require('componentes/footer.php')
 ?>
</body>
</html>