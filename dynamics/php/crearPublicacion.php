<?PHP
    // Validacion--->
    $include = include("./config.php");
    $con = connect();
    //<------ 

    if($include && $con)//<----------Verifica q este bien la conexion con la base 
    {
        // Datos a ingresar a la db ------>
        $ID_USUARIO = 0;
        $descripcion = "ya me salio :)";
        $fecha = "01/06/2023";
        $hora = "11:58";
        $corazon = 99;
        $n_comentarios = 89;
        $n_retuits = 99;
        // <------

        // Innsertas info ----->
        $peticion = "INSERT INTO publicacion VALUES(0,1, '$descripcion', '$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
        $query = mysqli_query($con, $peticion);
        // <-------

        // //Borrar info ------->
        $peticion = "DELETE FROM publicacion WHERE ID_PUB = 7;";
        $query = mysqli_query($con, $peticion);
        // //<-------------

        $sql = "SELECT * FROM  USUARIOS"; // <--------- Aqui es como en el cmd, regresa lo que pidas
        $query = mysqli_query($con, $sql);
        
        $datos = mysqli_fetch_array($query);  //<------------- Aqu

        // var_dump($query); //<--------------- Regresa falso si no se conecto bien, puede ser un error al ingresar datos, recordar que las cadenas tienen que ir a fuerzas entre comillas(Arriba en la parte de $peticion)

        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con, $sql);
        
        while($row = mysqli_fetch_assoc($query))  //<------------------- Aqui por ejemplo debes de cambiar el select de select * a  un select especifico, y con este while lo que hace es imprimir todos los registros que solicites 
        {
            echo "<br>";
            var_dump($row);
        }

        // -----


    }
?>