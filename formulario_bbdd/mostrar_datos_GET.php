<!DOCTYPE html>
<html lang="es">
<head>
    <title>Potencial Digital</title>
    <meta charset="UTF-8">
    <meta name="Author" content="Aitor Gragera Martin">
    <link rel="stylesheet" href=".\Estilos.css"/>
</head>
<body>
    <?php
        echo "<h2>DATOS DEL PONENTE</h2>";
        echo '<p>'.$_GET["Nombre"].'</p>';
        echo '<p>'.$_GET["Informacion"].'</p>';
        echo '<p>'.$_GET["Correo"].'</p>';
        echo '<p>'.$_GET["Tema"].'</p>';
    ?>
</body>
