<?php
$cadena_texto="Hola mundo";
echo strtolower($cadena_texto);     //convertimos todas la letras en minus
echo "<br>";
echo strtoupper($cadena_texto);     //convierte todo en mayus
echo "<br>";
echo ucfirst($cadena_texto);        //solo pone la primer letra en mayus
echo "<br>";
echo ucwords($cadena_texto);        //convierte la primer leyra a mayus de cada palabra
echo "<br>";
$longitud=strlen($cadena_texto);   //indica el tamaño de la cadena
echo "Hola mundo tiene estos carcteres".$longitud;
echo "<br>";
$palabras=str_word_count($cadena_texto);    //indica el núm de palabras
echo "Hola mundo tiene esta cantidad de palabras".$palabras;