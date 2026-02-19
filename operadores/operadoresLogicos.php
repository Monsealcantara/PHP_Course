<?php
//devuelven valores true o falses
//and = && or=||
$valor1=7;
$valor2=2;
echo var_dump($valor1==7 && 2>3);   //obtenemos como resultado falso
echo var_dump($valor1==7 && 9>3);   //devuelve verdadero
echo var_dump($valor1==7 || 2>3);   //devuelve verdadero
echo var_dump($valor1==9 && 2>3);   //devuelve falso
echo var_dump(!($valor1==$valor2)); //devuelve verdadero

$resultado = $valor1==$valor2;
echo var_dump($resultado);