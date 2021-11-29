<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productos - abm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
    <div class="contenedor__productos">
                  <form action="php/registro_producto_be.php" method="POST" class="formulario__register">
                  <!--asegurarse que el archivo se llame así-->
                      <h2>Productos</h2>
                      <input type="text" placeholder="Código" name="codigo_producto">
                      <input type="text" placeholder="Descripción" name="descripcion">
                      <input type="float" placeholder="Precio" name="precio">
                      <button>Cargar Producto</button>
                  </form>
         </div>
        </main>
        <script src="assets/js/script.js"></script>
     </body>
</html>