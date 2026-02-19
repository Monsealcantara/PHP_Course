<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="POST">   <!--con action le decimos a donde enviará la info y con method el metodo con el cual pasamos la info-->
        <div>
            <label for="nombre">Nombre</label>  <!--el for es para que me lleve al campo al momento de darle clicc a mi label-->
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matemáticas</option>
            <option value="Ciencias">Ciencias</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
            Manzana
        </label>
        <br><br><br>
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>