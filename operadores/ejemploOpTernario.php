<?php
$costo_camisa= 200;
$cant_camisas= 2;
($cant_camisas>=3) ? $desc=($costo_camisa*$cant_camisas)*0.2 : $desc=($costo_camisa*$cant_camisas)*0.1;

$total= ($costo_camisa*$cant_camisas)-$desc;

echo $total;