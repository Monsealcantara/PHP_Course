<?php
foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura.'<br>';
}
echo '<br>';
echo '<br>';
echo '<br>';
$manzana=$_POST['frutas'];
foreach($manzana as $fruta){
    echo $fruta.'<br>';
}