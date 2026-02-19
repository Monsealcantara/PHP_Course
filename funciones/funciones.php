<?php
function saludo(){
    echo "Hola mi noombre es: Monse";
}
saludo();       //llamada a la función 

echo "<br>";
// //tambien puedo hacer esto
// function saludo2(){
//     return "Hola mi nombre es: Monse"."<br>";
// }
// $sal=saludo2();
// echo saludo2();
// echo $sal;

// echo "<br>";
// function saludo3($nombre){
//     return "Hola, mi nombre es: ".$nombre;
// }

// echo saludo3("Elizabeth");
// echo "<br>";
// $usuario= "Leo";
// echo "<br>";
// echo saludo3($usuario);
// echo "<br>";
// echo saludo3($nombre="Carlos");

// echo "<br>";
// function prom_alumno($nota1,$nota2,$nota3){
//     $promedio=($nota1+$nota2+$nota3)/3;
//     return $promedio;
// }

// echo "El promedio del alumno es:".prom_alumno(7,8,9);
// echo "<br>";
// echo "El promedio del alumno es:".prom_alumno(6,6,9);
// echo "<br>";
// echo "El promedio del alumno es:".prom_alumno(7,10,9);

function prom_alumno($nota1,$nota2,$nota3){
    $promedio=($nota1+$nota2+$nota3)/3;
    return $promedio;
}