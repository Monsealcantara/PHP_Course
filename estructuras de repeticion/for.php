<?php
// for($i=1;$i<=20;$i++){
//     echo $i."<br>";
// }

// for($i=20;$i>=1;$i--){
//     echo $i."<br>";
// }

//ejercicio tabla
// $num=7;
// for($i=1;$i<=12;$i++){
//     echo $num."x".$i."=".$i*$num."<br>";
// }

echo "<br>";
//con esto se muetra al reves
$num=$_POST["numero"];
for($i=12;$i>=1;$i--){
    echo $num."x".$i."=".$i*$num."<br>";
}