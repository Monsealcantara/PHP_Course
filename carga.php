<?php
//lo sig. es para ver la info del archivo que hemos enviado
// echo $_FILES['fichero']['name']."<br>";
// echo $_FILES['fichero']['tmp_name']."<br>";
// echo $_FILES['fichero']['type']."<br>";
// echo $_FILES['fichero']['error']."<br>";
// echo $_FILES['fichero']['size']."<br>";


//lo sig en video 46
if(mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name'])!="image/png"){
    echo "Tipo de fichero no admitido";
    exit();
}

if(($_FILES['fichero']['size']/1024)>3072){
    echo "El archivo ha rebasado el peso permitido";
    exit();
}

if(!file_exists("archivos")){   //le mandamos el nombre de la carpeta
    if(!mkdir("archivos",0777)){
        echo "Error al crear el directorio";
        exit();
    }
}
chmod("archivos",0777);//para dar permisos de lectura y escritura

if(move_uploaded_file($_FILES['fichero']['tmp_name'],"archivos/".$_FILES['fichero']['name'])){
    echo "Archivo subido con éxito";
}else{
    echo "Error al subir el archivo";
}