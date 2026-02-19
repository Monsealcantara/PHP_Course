<?php
$cont=1;
while($cont<=20){
    echo $cont."<br>";
    if($cont==10){  //Cuando llegue al valor de 10 el código se va a detener
        break;
    }
    $cont++;
}
echo "<br>";

$pc=["SO","SSD","GPU","RAM","CPU"];

foreach($pc as $componet){
    echo $componet."<br>";
    
    // if($componet=="GPU"){   //cuando encuentra el valor de "GPU", se vuelve true y ya no se sigue ejecutando el código
    //     break;
    // }
    if($componet=="GPU"){   //cuando encuentra el valor de "GPU", se vuelve true y continua la ejecucion
        continue;
    }
}

echo "<br>";

for($i=1;$i<=10;$i++){
    if($i==5){
        continue;
    }
    echo $i."<br>";
}

echo "<br>";

$j=1;
//con while
while($j<=10){
    if($j==3){
        $j++;
        continue;
    }
    echo $j."<br>";
    $j++;
}