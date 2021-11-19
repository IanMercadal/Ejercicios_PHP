<?php
if(empty($_POST)){
    echo "Inserta los datos";
}
else{ 
    foreach ($_FILES as $archivo => $infoArchivo){

        $error = $_FILES [$archivo]['error'];
        $name = $_FILES[$archivo]['name'];
        $tmp_name = $_FILES[$archivo]['tmp_name'];
        $upload_dir = __DIR__."/imagenes//" .$name;

        if($error == UPLOAD_ERR_OK){
            move_uploaded_file($tmp_name,$upload_dir);
            echo "Todo ha ido bien";
        }
        else{
            echo "No ha ido bien, te falta calle";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Formulario</h1>

        <form method="POST" enctype="multipart/form-data">

            <label>Nombre: <input type="text" name="nombre"></label>
            <br>
            <label>Apellido: <input type="text" name="apellido"></label>
            <br>
            <label>Edad: <input type="number" name="edad"></label>
            <br>
            <label>Sexo: 
            <br>
            <input type="radio" id="sexoH" name="sexo" value="Hombre">Hombre
            <br>
            <input type="radio" id="sexoM" name="sexo" value="Mujer">Mujer
            </label>
            <br>
            <label>Sube un fichero</label>
            <input type="file" name="archivoSeleccionado" id="archivoSeleccionado" value="" />
            <input type="file" name="archivoSeleccionado2" id="archivoSeleccionado2" value="" />
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>