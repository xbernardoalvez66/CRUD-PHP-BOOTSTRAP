<?php

 include 'conexion.php';


$nroproducto = $_POST['nroproducto'];
$nombreproducto = $_POST['nombreproducto'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$distribuidor = $_POST['distribuidor'];

$sql ="INSERT INTO `stock`( `nroproducto`, `nombreporducto`, `categoria`, `cantidad`, `distribuidor`) VALUES ($nroproducto,'$nombreproducto','$categoria',$cantidad,'$distribuidor') ";
$insertar = mysqli_query($conexion,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<div class="container" style="width: 500px; margin-top: 20px">
<center>
	<h4>Producto agregado con exito!!</h4>
	</center>
<div style="padding-top: 20px;">

	<center>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Registrar nuevo producto</a>
	</center>
	</div>
</div>