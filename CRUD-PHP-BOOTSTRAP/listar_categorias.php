<!DOCTYPE html>
<html>
<head>
	<title>Lista de categoria</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
<div class="conteiner" style="margin-top: 40px; width: 500px;">
  <div style="text-align: right;">
  <a href="index.php" role="button"  class=" btn-sm  btn-primary">Volver</a> 
</div>
<h3>Lista de categoria</h3>	
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de Categoria</th>
      
      <th scope="col">Accion</th>
    </tr>
  </thead>
 
    
    	
    	<?php 
            include 'conexion.php';
            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexion,$sql);

            while ($array = mysqli_fetch_array($busca)) {
            	$id_categoria = $array['id_categoria'];
            	$nombre_categoria = $array['nombre_categoria'];
            	
            
    	 ?>
    	 <tr>
      <td><?php echo $nombre_categoria ?></td>
     
      <td><a class="btn btn-warning btn-sm" style="color: white;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
      <a class="btn btn-danger btn-sm" style="color: white;" href="eliminar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Eliminar</a>

      </td>
      <?php } ?>
    </tr>
    
  
</table>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>