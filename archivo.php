<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data">   <!--con enctype="multipart/form-data" le decimos que se envia archivos desde el formulario-->
        <input type="file" name="fichero" accept=".jpg, .png, .pdf, .mp4">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>