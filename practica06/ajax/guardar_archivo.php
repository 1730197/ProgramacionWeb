<?php

include '../config.php';

header('Content-Type: application/json; charset=UTF-8');

$res = array('guardado' => false, 'error' => NULL);

if (!isset($_FILES['archivo'])) {    
    $res['error'] = 'Archivo no enviado';
    echo json_encode($res);
    exit();
}

$nombreArchivo = basename($_FILES['archivo']['name']);

$rutaFinal = DIRECTORIO_ARCHIVOS . $nombreArchivo;
move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaFinal);

$res['guardado'] = true;
echo json_encode($res);
