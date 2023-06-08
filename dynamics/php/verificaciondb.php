<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con)//<----------Verifica q este bien la conexion con la base 
    {
        echo "Tamos Joya";
    }
    else{
        echo "Chale";
    }
?>