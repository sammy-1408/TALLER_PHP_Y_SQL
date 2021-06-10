<?php
//Parse Error -> Tiempo de compilación

//Fatal Error -> Detiene la ejecución completamente

//Warning -> Advertencia seguirá la ejecución


//Notice -> Avisa en tiempo de ejecución, detalles
$result;

echo 'Resultado' .$result;
echo 'Adios';
trigger_error("Advertencia: Hay un error en", E_USER_WARNING);

?>