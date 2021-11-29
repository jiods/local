<?php
 
 include "conexion_be.php";
 $sql="SELECT * FROM pedido";
 $result=mysqli_query($conexion,$sql);
while($r=mysqli_fetch_array($result)){
   
    echo "id: ".$r[0]."</br>";
    echo "codigo pedido: ".$r[1]."</br>";
    echo "codigo del producto: ".$r[2]."</br>";
    echo "cantidad: ".$r[3]."</br>";
    echo "<hr></hr>";
}
 mysqli_close($conexion);
 
 ?>
