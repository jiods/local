<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Pedidos - local</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo_c.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "local");
    $result=mysqli_query($conexion,"SELECT usuario FROM pedido");
?>
<main>
<div class="contenedor_consulta">
    <h1>Pedidos realizados</h1>
    <form action="php/consulta.php" method="POST">
    <input type="submit" value="Ver todos los pedidos">
    </form>
    
</div>
</main>
</body>
</html>