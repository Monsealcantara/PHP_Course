<?php
//método post
$nombre=$_POST['nombre'];   //para recibir lo que envia el usuario
$asignatura=$_POST['asignatura'];
$frutas=$_POST['frutas'];
echo $nombre."-".$asignatura."-".$frutas;

//método get, en este se ven los datos en la url
// $nombre=$_GET['nombre'];   //para recibir lo que envia el usuario
// $asignatura=$_GET['asignatura'];
// $frutas=$_GET['frutas'];
// echo $nombre."-".$asignatura."-".$frutas;