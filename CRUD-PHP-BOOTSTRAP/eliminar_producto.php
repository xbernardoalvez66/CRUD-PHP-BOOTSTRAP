<?php 


include 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM `stock` WHERE id_estock = $id";
$eliminar = mysqli_query($conexion,$sql);


?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 

<div class="container" style="width:400px;">
<center>
<h3>Eliminado con exito!</h3>
<div style="margin-top: 10px;">
<a href="listar_productos.php" class="btn btn-warning" style="color: white">Volver</a>
</center>
</div>
</div>