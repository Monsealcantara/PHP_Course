<?php
//video 48 lo de las cookies
    //sintaxis para declara una cookie
    //setcookie("Nombre",valor,expiración,dir,dominio,secure,httponly);

    setcookie("Idioma","es",time()+60*60*24*365,"/","localhost",false,false);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1><?php echo $_COOKIE['Idioma'];?>Hola mundo</h1>
</body>
</html>