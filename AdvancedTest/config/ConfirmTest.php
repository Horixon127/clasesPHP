<?php
    include_once("conexionBD.php");

    $dates = isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['categoria']) && isset($_POST['marcacoche']) && isset($_POST['modelo']) && isset($_POST['numcomp']); 

       $Nempty = $_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['categoria'] !== ""  && $_POST['marcacoche'] !== ""  && $_POST['modelo'] !== ""  && $_POST['numcomp'] !== "";

        switch($dates && $Nempty) {

            case true:

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $categoria = $_POST['categoria'];
            $marcacoche = $_POST['marcacoche'];
            $modelo = $_POST['modelo'];
            $numcomp = $_POST['numcomp'];

            $conexion = new Database;
            $repeated = $conexion->db->query("SELECT id FROM competitors WHERE numcomp=$numcomp");
            $nameRow = $repeated->rowCount();
            if ($nameRow <= 0) {
            $confirm = $conexion->insertar($nombre, $apellido, $edad, $categoria, $marcacoche, $modelo, $numcomp);

        } else {

            $confirm = 3; 
        }

         break;
            case false:

            $confirm = 2;
        }

        header('Location: ../index.php?confirm='.$confirm);

?>