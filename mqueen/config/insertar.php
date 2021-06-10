<?php
    include_once("conexionBD.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['categoria']) && isset($_POST['marcacoche']) && isset($_POST['modelo']) && isset($_POST['numcomp'])) {

        if($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['categoria'] !== ""  && $_POST['marcacoche'] !== ""  && $_POST['modelo'] !== ""  && $_POST['numcomp'] !== "") {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $categoria = $_POST['categoria'];
            $marcacoche = $_POST['marcacoche'];
            $modelo = $_POST['modelo'];
            $numcomp = $_POST['numcomp'];

            $conexion = new Database;
            $confirm = $conexion->insertar($nombre, $apellido, $edad, $categoria, $marcacoche, $modelo, $numcomp);

        } else {

            $confirm = 2; 

        }


    }

    header('Location: ../index.php?confirm='.$confirm)

?>