<?php

$miNombre = 'Luis Roberto Flores';
$navegador = $_SERVER['HTTP_USER_AGENT'];

$busqueda = $_GET['busqueda'];

$arr1 = array();
for ($i; $i < 10; $i++) {
    $arr1[] = 'Elemento ' . $i;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <title>Práctica 06</title>
</head>
<body>

    <div class="jumbotron text-center">
        <h1>Práctica 06</h1>
        <h3>Programación del Lado del Servidor con PHP</h3>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <h3>Fecha Hora del Servidor</h3>
                <p><?php echo date(DATE_ATOM); ?></p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <p>Nombre: <strong><?=$miNombre?></strong></p>
                <p>User Agent: <strong><?php echo $navegador; ?></strong></p>
                <p>Busqueda: <strong><?=$busqueda?></strong></p>
                <p><?php echo var_dump($miNombre); ?></p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <ul>
                    <?php foreach ($arr1 as $i) { ?>
                        <li><?=$i?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>