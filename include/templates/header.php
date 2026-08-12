<?php 
    $zonaHoraria = new DateTimeZone('America/Hermosillo');
    $fecha = new DateTime('now', $zonaHoraria);
    $formateador = new IntlDateFormatter(
        'es_ES',
        IntlDateFormatter::NONE, 
        IntlDateFormatter::NONE,
        null, null, "EEEE, d MMMM"
    );
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/src/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header>
        <div class="barra contenedor">
            <section class="perfil">
                <div class="name-perfil">
                    <i class="fa-solid fa-circle-user"></i>
                    <p>Jose</p>
                </div>
                <p class="fecha"><?php echo $formateador->format($fecha)?></p>
            </section>
            <nav>
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
                <a href="#"><i class="fa-solid fa-gear"></i></a>
            </nav>
        </div>
    </header>