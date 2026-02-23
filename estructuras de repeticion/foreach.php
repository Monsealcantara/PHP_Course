<?php
$laptop=["Acer Nitro5","Windows 11","AMD Ryzen 5 4600H","SSD 256GB","RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9,
];

foreach($laptop as $valor){ //recorre el arreglo y muestra sus valores
    echo $valor."<br>";
}
foreach($laptop as $clave => $valor){ //recorre el arreglo y muestra sus valores y clave
    echo $clave."-".$valor."<br>";
}

foreach($frutas as $clave => $valor){ //recorre el arreglo y muestra sus valores y clave
    echo "Clave ".$clave." su valor:".$valor."<br>";
}
echo "<br>";
echo "<br>";
$productos = [
    ["codigo" => "A0001" , "descripcion" => "Mouse"],
    ["codigo" => "A0002" , "descripcion" => "Teclado"],
    ["codigo" => "A0003" , "descripcion" => "Monitor"],
    ["codigo" => "A0005" , "descripcion" => "Impresor"],
]; 

foreach($productos as $prod){   //así se rrecorre un ARRAY asociativo
    echo $prod["codigo"]."-".$prod["descripcion"]."<br>";
}