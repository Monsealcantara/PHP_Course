<?php
//Clave hash
$clave="Hola mundo";
echo md5($clave);
echo "<br>";
//otra forma
echo hash("md5",$clave)."<br>";

// foreach(hash_algos() as $algoritmos){
//     //echo $algoritmos."<br>";    //muestra todos los algoritmos de hash
//     echo $algoritmos." - ".hash($algoritmos,$clave)."<br>";
// }

echo password_hash($clave,PASSWORD_DEFAULT);    //CON SU EJECUCION SE MUESTRA SIEMPRE UNA CONTRASEÑA DIFERETE
$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);    //con esta sintaxis se aplican 11 veces el algoritmo

echo password_verify($clave,$clave_procesada);

$clave2="123456";
if (password_verify($clave,$clave_procesada)){
    echo "Las claves coinciden";
}else{
    echo "Las claves no coinciden";
}