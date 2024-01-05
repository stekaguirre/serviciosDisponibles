<!-- ARCHIVO DE CONFIGURACION -->

<?php

    define('APP_NAME','servicios disponibles');
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','serviciosdisponibles');

    $URL = "http://localhost/serviciosdisponibles";

    date_default_timezone_set("America/Bogota");
    $fechahora = date('Y-m-d H:i:s');


    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

    try{
        $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // echo "Conexión exitosa a la base de datos ";
    }catch (PDOException $e){
        //print_r($e);
        echo "Error al conectar a la base de datos";
    }

?>

