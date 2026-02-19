<!-- 
$numero=9;
//$numero=NULL;
//unset($numero);//es para destruir o eliminar una variable

if(is_null($numero)){
    echo "Es nula";
}else{
    echo "No es nula";
}
echo "<br>";

if(empty($numero)){ //con empty vemos si está vacía la variable
    echo "Está vacia";
}else{
    echo "No esta vacia";
}
echo "<br>";
if(isset($numero)){ //con isset vemos si está definina o no la variable
    echo "Está definida";
}else{
    echo "No esta definida";
} -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_POST["numero"]) && $_POST['numero']!=""){
            include"for.php";
        } 
    ?>
</body>
</html>