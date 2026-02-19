<?php
$fruta="fresa";

switch($fruta){
    case "Fresa":
        echo "Eres una Fresa";
    break;
    case "Pera":
        echo "Eres una Pera";
    break;
    default:
        echo "No eres Fresa ni Pera";
}

$dia=1;
switch($dia){
    case 1:
        echo "Lunes";
    break;
    case 2:
        echo "Martes";
    break;
    case 3:
        echo "Miércoles";
    break;
    case 4:
        echo "Jueves";
    break;
    case 5:
        echo "Viernes";
    break;
    case 6:
        echo "Sábado";
    break;
    case 7:
        echo "Domingo";
    break;
    default:
        echo "Número de día no válido";
}