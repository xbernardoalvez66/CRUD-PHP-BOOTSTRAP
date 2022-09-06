<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Formulario de Registro</title>
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
    <div style="text-align: right;">
  <a href="index.php" role="button"  class=" btn-sm btn btn-primary">Volver</a> 
</div>
		<h4>Formulario de registro</h4>
<form action="_insertar_producto.php" method="post" style="margin-top: 20px;">
 <div class="form-group">
    <label >Nro de productos</label>
    <input type="number" class="form-control" name="nroproducto"   placeholder="Inserte el numero del producto" required autocomplete="off">
    </div>
    <div class="form-group">
    <label >Nombre del producto</label>
    <input type="text" class="form-control" name="nombreproducto"   placeholder="Inserte el nombre del producto" required autocomplete="off">
    </div>
    <div class="form-group" >
    <label >Categorias</label>
    <select class="form-control"  name="categoria" required>
      
      <?php 
       include 'conexion.php';
       $sql = "SELECT * FROM categoria order by nombre_categoria ASC";
       $buscar = mysqli_query($conexion,$sql);
        while ($array = mysqli_fetch_array($buscar)) {
         $id_categoria = $array['id_categoria'];
         $nombre_categoria = $array['nombre_categoria'];
        


      ?>

    
      <option><?php echo $nombre_categoria ?></option>
     <?php } ?>
    </select>
  </div>
    <div class="form-group">
    <label >Cantidad</label>
    <input type="number" class="form-control"  name="cantidad"  placeholder="Inserte la cantidad del producto "required autocomplete="off">
    </div>
     <div class="form-group">
    <label >Distribuidor</label>
    <select class="form-control"  name="distribuidor" required>
      <?php 
       include 'conexion.php';
       $sql2 = "SELECT * FROM distribuidor";
        $buscar2 = mysqli_query($conexion,$sql2);
        while ($array2 = mysqli_fetch_array($buscar2)) {
         $id_dist = $array2['id_dist'];
         $nombre_dist = $array2['nombre_dist'];
        



      ?>

      <option><?php echo $nombre_dist ?></option>
      <?php } ?>
     
    </select>
  </div>
  <div style="text-align: right;">

  <button type="submit" id="boton" class=" btn-sm">Registrar</button>
  </div>
  </div>	
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>