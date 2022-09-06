<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
		#boton{
 		background-color: #FF3B3B;
 		color: #ffff;
 	}
 </style>
</head>
<body>
<div class="contaniner" style="margin-top: 40px; width:500px;">
	<div style="text-align: right;">
  <a href="index.php" role="button"  class=" btn-sm btn btn-primary">Volver</a> 
</div>
	<h4 >Registro de distribuidor</h4>
<form action="_insertar_distribuidor.php" method="post"  >
	<label >Distribuidor</label>
	<div class="form-group">
		<input type="text" name="distribuidor" class="form-control" placeholder="Digite el nombre del distribuidor" autocomplete="off">
	</div>
	<div style="text-align: right;">
	<button type="submit" id="boton" class="btn  btn-sm">Registrar</button>
	</div>
</form>
	
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>