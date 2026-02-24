<?php
include "funciones/funciones.php";  //tmabien funciona así "./funciones/funciones.php";
echo "El promedio es:".prom_alumno(7,8,9);

// si el archivo de funciones.php se encontrara en una carpeta
// todavía "más externa" que en la que se encuentra actualmente se
// necesita colocar de la siguiente manera:

// include "../funciones/funciones.php"

// estas "../" se ponen tantas veces como carpetas "afuera" esta
// la carpeta que contiene el código 