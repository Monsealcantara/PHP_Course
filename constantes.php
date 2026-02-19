<?php
//El valor de las constantes no se pueden modificar, estas no llevan "$"
//Sintaxis
define("NOMBRE","Monse");
//define("NOMBRE",20);      //no se puede
echo NOMBRE;

//A partir de  php 5.3
const APELLIDO = "Alcántara";
echo APELLIDO; 

//A PARTIR DE PHP 7
define("ALUMNOS",array("Carlos","Monse","José"));
echo ALUMNOS[0];