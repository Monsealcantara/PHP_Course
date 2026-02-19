<?php
    session_name("LOGIN");
    session_start();

    session_destroy();
    //session_unset();
    

    if(headers_sent()){ //si hay encabezados (codigo antes)que ingresar lo hace con java y si no con php
        echo "<script> window.location.href='index.php'</script>";
    }else{
        header("Location: index.php");
    }