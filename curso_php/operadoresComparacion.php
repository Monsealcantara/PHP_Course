<?php
//los sig devuelve true
echo var_dump("1"==1);  //este operador solo tiene en cuenta el dato y no el tipo
//lo sig devielve false 
echo var_dump("1"===1);   //este si tiene en cuenta el tipo de dato
//lo sig devuelve false
echo var_dump(2=="1");

$valor1=2;
echo var_dump($valor1!="2");    //este si tiene en cuenta l tipo de dato
echo var_dump($valor1<2);     //este si tiene en cuenta el tipo de dato
//ver de nuevo el video 12 del curso