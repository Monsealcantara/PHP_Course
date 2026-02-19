<?php
    if(!preg_match("/^[a-zA-Z0-9]{3,10}$/",$_POST['usuario'])){
        echo "El usuario no coincide con el formato solicitado"."<br>";
        exit();
    }
    if(!preg_match("/^[a-zA-Z0-9$@.-]{4,30}$/",$_POST['clave'])){
        echo "La clave no coincide con el formato solicitado"."<br>";
        exit();
    }
    if($_POST['usuario']=="Monse" && $_POST['clave']=="1234"){
        session_name("LOGIN");
        session_start();
        $_SESSION["Nombre"]="Monse";
        $_SESSION["Apellido"]="Alcántara";
        $_SESSION["País"]="México";

        if(headers_sent()){ //si hay codigo html antes entonces hay que mandarlo por java script y si no lo mandamos normal con php
            echo "<script> window.location.href='contador.php'</script>";
        }else{
            header("Location:contador.php");
        }
    }else{
        echo "Datos incorrectos";
    }