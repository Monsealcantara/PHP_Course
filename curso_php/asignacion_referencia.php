<?php
$texto="mexico";
$var1=$texto;
$var2=&$texto;  //esta es la asiganción por referencia, siempre mantiene el valor de la variable texto aunque cambie la variable 

echo $var2;

$texto="Monse";
echo $var2; //este muestra Monse
echo $var1; //este muestra mexico