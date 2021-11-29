<?php 
    include "conexion_be.php";

    $codigo_producto = $_POST['codigo_prod'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO producto(codigo_producto, descripcion, precio) 
              VALUES('$codigo_prod', '$descripcion', '$precio')";

    $verificar_codigo_producto = mysqli_query($conexion, "SELECT * FROM producto WHERE codigo_producto='$codigo_producto' ");

     if(mysqli_num_rows($verificar_codigo_producto) > 0){
          echo '
           <script> 
           alert("Este código ya existe, intenta con uno diferente");
           window.location = "../index_producto.php";
           </script>
       ';
  exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Producto registrado exitosamente");
            window.location = "../index_producto.php";
        </script>
        ';
    } else {
        echo '
            <script>
                  alert("Inténtelo de nuevo, producto no registrado");
                  window.location = "../index_producto.php";
            </script>
        ';
    }
    mysqli_close($conexion);