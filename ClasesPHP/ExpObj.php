<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    <?php
    class Persona {

        //atributos
        public $nombre;
        public $apellidos;
        public $edad;
        public $numId;


        //metodos
        public function info(){

            $info = "";

            $info .= "<p>".$this->nombre."</p>";
            $info .= "<p>".$this->apellidos."</p>";
            $info .= "<p>".$this->edad."</p>";
            $info .= "<p>".$this->numId."</p>";


            return $info;
        }


    }

    //creacion de una nueva persona
    $persona = new Persona();

    //definiendo atributos
    $persona->nombre = "Juan";
    $persona->apellido = "Ostios";
    $persona->edad = "18";
    $persona->numId = "1029320884";

    echo $persona->info();
    ?>
</body>
</html>