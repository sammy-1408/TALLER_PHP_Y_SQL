<?php
//Constantes no varian
const NUMERO = 3;
$numero = mt_rand();
echo $numero;
//const SALUDO = "Hola";
const SALUDO = 'Hola';
echo SALUDO;

get_defined_constants();
print(get_defined_constants(true));
?>