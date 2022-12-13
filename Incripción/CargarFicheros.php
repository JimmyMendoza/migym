<?php

// Cómo subir el archivo
$fichero = $_FILES["file"];
$fichero2 = $_FILES["fil"];
$fichero3 = $_FILES["files"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "subidas/".$fichero["name"]);
move_uploaded_file($fichero2["tmp_name"], "subidas/".$fichero2["name"]);
move_uploaded_file($fichero3["tmp_name"], "subidas/".$fichero3["name"]);

// Redirigiendo hacia atrás
header("location:../login/Menu.php");
?>