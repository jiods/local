<?php 
    
    include "conexion_be.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $id = $_POST['id'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuario(nombre, apellido, mail, id, contrasena) 
              VALUES('$nombre', '$apellido', '$mail', '$id', '$contrasena')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE id='$id' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script> 
               alert("Este usuario ya está en uso, intenta con uno diferente");
               window.location = "../index.php";
            </script>
        ';
       exit();
    }
    
    $verificar_mail = mysqli_query($conexion, "SELECT * FROM usuario WHERE mail='$mail' ");

    if(mysqli_num_rows($verificar_mail) > 0){
        echo '
            <script> 
               alert("Este mail ya está en uso, intenta con uno diferente");
               window.location = "../index.php";
            </script>
        ';
       exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    } else {
        echo '
            <script>
                  alert("Inténtelo de nuevo, usuario no registrado");
                  window.location = "../index.php";
            </script>
        ';
    }
    mysqli_close($conexion);
