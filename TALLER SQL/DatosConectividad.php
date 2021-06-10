<?php 
header('Content-type: text/plain'); //Ejecuta saltos de linea en php

include 'DatosConectividad.php'; //Traemos las variables del archivo Datos_Conexion.php

$mysqli = new mysqli(SERVIDOR,USUARIO ,CONTRASENA ,NOMBREDB );
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else {
    echo "Exito al conectar \n";
}
echo $mysqli->host_info . "\n";

?>