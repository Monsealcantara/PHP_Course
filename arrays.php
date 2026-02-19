<?php
// hay arreglos escalares, asociativos y multidimensionales
//el sig es un array escalar
$estudiantes=array("Carlos","Monse","José","Elizabeth");
echo $estudiantes[3];

//modificación de un valor
$estudiantes[2]="Claudia";
echo $estudiantes[2];

//otra sintaxis, tamb es un array escalar
$estudiantes=["Carlos","Monse","José","Elizabeth",7];

//Podemos tener arrays vacíos
$vacio = array();

//Array asociativo, se llama así porque cada elemento del arreglo tiene asociado un valor, ES COMO UNA CLAVE-VALOR
$tutor=[
    "nombre"=>"Carlos",
    "apellido"=>"Alfaro",
    "edad"=>27
]; //asi podemos asociar una clave con su valor en un array
echo $tutor["edad"];

$tutor["edad"]=19;
echo $tutor["edad"];    //como es array asociativo accedo a la info mediante las claves

//array multidimencional
$tutor_2=[
    "nombre"=>"Monse",
    "apellido"=>"Alcántara",
    "edad"=>22,
    "cursos"=>["php","python","JS"],
    "amigo"=>["nombre"=>"Leo","apellido"=>"Alcántara","edad"=>14]
];

echo $tutor_2["cursos"][1];     //acceso a los valores del array escalar que está dentro de mi array tutor_2, es mediante clave y luego el índice

//acceso al array asociativo de amigo
echo $tutor_2["amigo"]["apellido"];

//modificacion de valor del array de cursos
$tutor_2["cursos"][0]="C";
echo $tutor_2["cursos"][0];

//CREACIÓN DE UNA NUEVA CLAVE
$tutor_2["pais"]="México";
echo $tutor_2["pais"];

echo count($estudiantes);   //para contar los elementos

echo count($tutor_2,COUNT_RECURSIVE);   //Para contar en un array multidimensional