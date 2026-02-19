<?php
    session_name("LOGIN");
    session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <br>
    <?php echo "Hola ".$_SESSION['Apellido']."";?>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>    
</body>
</html> 