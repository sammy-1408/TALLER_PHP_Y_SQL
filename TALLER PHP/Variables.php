<?php
//$valor1 = 4;
//$valor1 = 'Hola';

//$valorUno; //Camelcase
//$valor_uno; //snake

$rosa = 'Color';

function prueba(){
    global $rosa;
    $rosa = 'Flor';
    echo $rosa;
}

prueba();

echo $rosa;

?>