<?php
$edad=55;
$genero="F";

if($genero=="M"){
    if($edad>=60){
        echo "El masculino puede jubilarse";
    }else{
        echo "El masculino no puede jubilarse";
    }

}elseif ($genero=="F") {
    if($edad>54){
        echo "La femina puede jubilarse";
    }else{
        echo "La femina no puede jubilarse";
    }
}else {
    echo "Coloque una opción válida";
}

//Ejemplo hecho de nuevo
$sexo="H";
$edad=54;

if($sexo=="H"){
    if($edad>=65){
        echo "Se puede jubilar";
    }else{
        echo "No se puede jubilar";
    }
}elseif($sexo=="M"){
    if($edad>=54){
        echo "Se puede jubilar";
    }else{
        echo "No se puede jubilar";
    }
}else{
    echo "Coloque una opción válida";
}