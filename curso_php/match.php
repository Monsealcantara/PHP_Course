<?php
// $a=10;
// $x=10;
// $y=9;
// $z=7;
// $d =6;

// // esta estructura es parecida el switch
// $resultado= match ($a) {
//     //$x => "Valor igual a x",
//     $y => "Valor igual a y",
//     $z => "Valor igual a z",
//     $d,$y => "Valor igual a x o y",
//     default => "No coincide con ninguna variable"
// };

// echo $resultado;

$edad=10;
$resultado=match (true) {
    $edad >= 60 =>"Eres de la tercera edad",    
    $edad >= 30 =>"Eres adulto" ,
    $edad >= 18 =>"Eres jovens" ,
    default => "Eres un niño"
};

echo $resultado;