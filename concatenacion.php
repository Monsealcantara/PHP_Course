<?php
$nombre="Monse";
$pais="México";
$numero=7;

$resultado=$nombre.$pais.$numero;   //para la concatenación se utiliza punto

echo $resultado;
echo "Mi nombre es: ".$nombre."mi país es: ".$pais;

//interpolación de variables, solo se puede hacer en cadenas con comillas dobles
echo "Mi número es $numero, muy bien";
//o tambien se puede:
echo "Mi número es {$numero}, muy bien";
