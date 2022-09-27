<?php
include 'conexion.php';

$conectarDB = conectar();

$query = "SELECT * FROM propiedades";
$resultado = mysqli_query($conectarDB,$query);
while($row=$resultado->fetch_assoc()){
    
     $nombre=$row['nombre'];
     $precio=$row['precio'];
     $medidas=$row['medidas'];
     $descripcion=$row['descripcion'];

}

?>