<?PHP
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "tiuter";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB); //<<------------aqui se conecta a la base de datos
        return $conexion;//<<..............en caso de no conectarse regresara un valor buleano de FALSE
    }


?>