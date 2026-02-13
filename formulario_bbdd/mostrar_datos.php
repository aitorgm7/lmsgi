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
        echo '<p>'.$_POST["Nombre"].'</p>';
        echo '<p>'.$_POST["Informacion"].'</p>';
        echo '<p>'.$_POST["Correo"].'</p>';
        echo '<p>'.$_POST["Tema"].'</p>';
    ?>
</body>
</html>