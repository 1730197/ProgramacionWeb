<?php

include 'config.php';

if (!isset($_FILES['archivo'])) {
    header('Location: subir_archivo.html');
    exit();
}

$nombreArchivo = basename($_FILES['archivo']['name']);

$rutaFinal = DIRECTORIO_ARCHIVOS . $nombreArchivo;
move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaFinal);

// var_dump($_FILES['archivo']);

header('Location: subir_archivo.html');

?>
