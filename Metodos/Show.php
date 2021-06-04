<?php
    if (isset($_POST['name']) && isset($_POST['Lastname']) && isset($_POST['email'] )){
        if ($_POST['name'] !== "" && $_POST['Lastname'] !== "" && $_POST['email'] !== ""){
            $value = 1;
        } else {
            $value = 0;
        }
    }

    echo $Lastname."value";

    header("Location: ./index2.php?confirm=".$value)
?>