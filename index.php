<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Obligatoria N° 2 - PHP</title>
</head>
<body>
    <p> A continuación, datos en html con php embebido: </p>    

    <h2><u>Datos</u></h2>
    <br>
    <ul>
        <li><?php echo "Nombre: Fiorella "?></li>
        <li><?php echo "Apellido: Riccobelli"?></li>
        <li><?php echo "Edad: 25 años"?></li>    
        <li><?php echo "Hobbie: ver Netflix"?></li>
        <li><?php echo "Editor: Visual Studio Code"?></li>
        <li><?php echo "Sistema Operativo: "; echo PHP_OS?></li>

    </ul>
    <hr>
</body>
</html>

A continuación, datos en php puro:

<?php

    echo "<h2><u>Datos</u></h2>
    <br>
    <ul>
        <li>Nombre: Fiorella </li>
        <li>Apellido: Riccobelli</li>
        <li>Edad: 25 años</li>    
        <li>Hobbie: ver Netflix</li>
        <li>Editor: Visual Studio Code</li>
        <li>Sistema Operativo:"; echo PHP_OS; echo"</li>

    </ul>
    
    ";

?>