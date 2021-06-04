<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phptest</title>
</head>
<body>
    <?php
       //impresiones de texto
       //|echo| : establece los datos y los devuelve a HTML como parte de la navegacion
       echo "<h1>Hola Mundo!</h1>";

       //variables
       // |$| = significa variable
       $nombre = "Juan David";
       $edad = 18;

       //<h3>minombre Edad: 23 años </h3>;
       //(|.| concatenacion o union de expresiones")
       echo '<h3>' .$nombre.' Edad: '.$edad.' años </h3>';

       // EJEMPLO DE COMO SUMAR O ACUMULAR 
       //$edad | += | 10
       $edad .= 10;
       echo '<h3>'.$edad.'</h3>';

       //condicionales

       if($edad > 17){
            echo '<h3>es mayor de edad</h3>';
       } else {
            echo '<h3>es menor de edad</h3>';
       }
       //iteraciones en PHP
       for ($i = 1; $i <= 5; $i++){
        echo '<h5>iteracion no'.$i.'<h5>';
       }

       //funciones
       //Cuando Se Declara Un Funcion Puede Ser Netamente Personalizada


       function sayHi(){
           echo '<h2>Hola</h2>';
       }

       function suma(){
            $num1 = 5;
            $num2 = 10;

            return $num1 + $num2."\n"; 
       }

       sayHi();

       echo suma();

       $array = array(
           0 => "Jeimmy",
           1 => "Kimberly",         // |,| Agregar
           2 => "Kenny"
       );

       for($j = 0; $j < 3; $j++){
           echo $array[$j]."\n";            
       }
    ?>

</body>
</html>