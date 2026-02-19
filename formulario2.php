<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="index2.php" method="POST">   <!--con action le decimos a donde enviará la info y con method el metodo con el cual pasamos la info-->
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matemáticas</option>
            <option value="Ciencias">Ciencias</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="manzana" id="opcion-1" name="frutas[]">
            Manzana
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="melon" id="opcion-2" name="frutas[]">
            Melón
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="mango" id="opcion-3" name="frutas[]">
            Mango
        </label>
        <br><br><br>
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>