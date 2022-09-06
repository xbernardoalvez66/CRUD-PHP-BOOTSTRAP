<?php 


include 'conexion.php';

echo $id = $_GET['id'];


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Formulario de Edicion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <style type="text/css">
 	#tamanhoContainer{
 		width: 500px;
 	}
 	#boton{
 		background-color: #FF3B3B;
 		color: #ffff;
 	}
 </style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulario de edicion</h4>
<form action="_actualizar_distribuidor.php" method="post" style="margin-top: 20px;">
	<?php 

 $sql ="SELECT * FROM `distribuidor` WHERE id_dist = $id";
 $buscar = mysqli_query($conexion,$sql);
 while ($array = mysqli_fetch_array($buscar)) {
 	$id_dist= $array['id_dist'];
            	$nombre_dist = $array['nombre_dist'];
            	
 

	?>
 <div class="form-group">
    <label >Nombre del distribuidor</label>
    <input type="text" class="form-control" name="nombre_dist"  value="<?php echo $nombre_dist ?>"  >
    <input type="text" class="form-control" name="id"  value="<?php echo $id_dist ?>" style="display: none"  >
    </div>
    
  <div style="text-align: right;">
  <button type="submit" id="boton" class=" btn-sm">Actualizar</button>
  </div>

  </div>
  <?php } ?>	
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>