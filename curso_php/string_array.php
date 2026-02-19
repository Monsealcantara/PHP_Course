<?php
$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numeros= "uno dos tres cuatro cinco seis siete";

//explode(delimitador,string,limitador);  //explode crea una array, el limitador es opcional
$array_fecha = explode("/", $fecha1);  //explode crea una array, el limitador es opcional
echo $array_fecha[1];
echo "<br>";
$array_fecha = explode("-", $fecha2);
echo $array_fecha[1];
echo "<br>";

//con limitante
$array_numeros = explode(" ", $numeros,3);  //con negativos indicamos que lo divida en partes dependiendo de la cantidad de  valores son tomar en cuenta el número negativo
echo $array_numeros[1];