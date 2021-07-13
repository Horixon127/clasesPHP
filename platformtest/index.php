<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Formulario Ingreso</span></a>
                <a class="nav-link" href="./mostrar.php">Listado</a>
        </div>
    </nav>
    <div class="d-flex justify-content-center my-5 form-row ">
      <div class="card col-md-7"> 
        <div class="card-header">
            <h4>Formulario Ingreso</h4>
        </div>
        <div class="card-body">
            <?php
                if (isset($_GET['confirm'])) {

                    if ($_GET['confirm'] === "0") {
                        echo '<div class="alert alert-danger" role="alert"> <h6>Datos no ingresadosh6> </div>';
                    }
                    if ($_GET['confirm'] === "1") {
                        echo '<div class="alert alert-success" role="alert"> <h6> Qshao! <h6> </div>';
                    }
                    if ($_GET['confirm'] === "2") {
                        echo '<div class="alert alert-warning" role="alert"> <h6>Uno o mas campos estan vacios<h6> </div>';
                    }
                    if ($_GET['confirm'] === "3") {
                        echo '<div class="alert alert-warning" role="alert"> <h6>El usuario ya esta registrado<h6> </div>';
                    }

                }
        
            ?>
            <form action="./config/insertar.php" method="POST">

                <div class="form-group">
                    <input type="text"   class="form-control" id="nombre"   name="nombre"   placeholder="Nombre">
                </div>

                <div class="form-group">
                    <input type="text"   class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                </div

                <div class="form-group">
                    <input type="number" class="form-control" id="edad"     name="edad"     placeholder="Edad">
                </div>

                <div class="form-group  col-auto">

                    <label for="inputState">   <h7>Categoria</h7>   </label>

                <select type="text" class="form-control"  id="categoria" name="categoria">

                    <option selected>   Amateur    </option>

                    <option selected>   SemiSenior </option>

                    <option selected>   Senior     </option>

                </select> <br>

                <div class="form-row">

                    <div class="form-group col-md-6 ">
                        <input type="text"   class="form-control" id="marcacoche"    name="marcacoche"    placeholder="Marca Del Coche">
                    </div>

                    <div class="form-group col-md-2">
                        <input type="text"   class="form-control" id="modelo"        name="modelo"        placeholder="Modelo">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="numcomp"       name="numcomp"       placeholder="Numero del Competidor">
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Añadir Registro</button>

            </form> 
         </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>