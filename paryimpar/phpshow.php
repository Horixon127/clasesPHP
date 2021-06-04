<?php

        if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        if ($numero % 2 == 0){
            $value = 2;
        } else {
            $value = 1;
        }
    }
    
    header("Location: ./ParImpar.php?confirm=".$value)
?>