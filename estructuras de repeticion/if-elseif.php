<?php

// $dia=6;

// if($dia==1){
//     echo "Lunes";
// }elseif($dia==2){
//     echo "Martes";
// }elseif($dia==3){
//     echo "Miércoles";
// }elseif($dia==4){
//     echo "Jueves";
// }elseif($dia==5){
//     echo "Viernes";
// }elseif($dia==6){
//     echo "Sábado";
// }elseif($dia==7){
//     echo "Domingo";
// }else{
//     echo "Se introdujo un valor inválido";
// }

//Ejercicio 2

$cantidad=12;
$total=$cantidad*700;

if($cantidad<5){
    $total=$total-($total*0.1);
}elseif($cantidad>=5 && $cantidad<10){
    $total=$total-($total*0.2);
}elseif($cantidad>=10){
    $total=$total-($total*0.4);
}
echo "El total es: $".$total;