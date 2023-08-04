<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo-paquetes.css">
	<script type="text/javascript" src="../js/scriptPaquetes.js"></script>
</head>
<body>
	<?php 
    include '../header/header_carrito.php';
    include("../controlador/conexion.php");
	include("compras.php");
    ?>
    
     <hr>

	<form name="Form2">
		
		<div class="contenido">
		<div >
		<label>Enlaces por coste de tours :</label><br>
		<input type="checkbox" name="pri">Tour de costo mayor<br>
		<input type="checkbox" name="seg">Tour de costo medio<br>
		<input type="checkbox" name="ter">Tour de costo bajo<br>
		
		<input type="button" value="Mostrar" onclick="ejem2()"><br><br>
		</div>
		<div >
		<label>Respuesta :</label>
		<br>
		<textarea name="respuesta" rows="4" cols="100"></textarea><br>
		</div>
		</div>
	</form>

			<main>
				
				<div class="album py-5 bg-light">
			  <div class="container">
			    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			      <?php
			      $conn=conectar();
			      $lista = listarTour($conn);
			      //print_r($lista);
			      foreach ($lista as $producto) { ?>
			        <div class="col">
			          <div class="card shadow-sm">
			            <img src="../<?php echo $producto['Foto_tour']; ?>" alt="" width="100%" height="250">
			            <div class="card-body">
			              <h2 class="card-title"><?php echo $producto['Nombre_tour']; ?></h2>
			              <p class="card-text"><?php echo $producto['Descripcion_tour']; ?> </p>
			              <h3 class="card-tect">S/. <?php echo $producto['Precio_tour']; ?></h3>
			              <h5 class="card-text"><?php echo $producto['Cantidad_dias_tour'];?>Dias</h5>
			              <div class="d-flex justify-content-between align-items-center ">
			                <form action="" method="POST">
			                  <input type="hidden" name="id" id="id" value="<?php echo $producto['Codigo_tour']; ?>">
			                  <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['Nombre_tour']; ?>">
			                  <input type="hidden" name="dias" id="dias" value="<?php echo $producto['Cantidad_dias_tour']; ?>">
			                  <input type="hidden" name="precio" id="precio" value="<?php echo $producto['Precio_tour']; ?>">
			                  <input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['Foto_tour']; ?>">
			                  <input type="hidden" name="region" id="region" value="<?php echo $producto['Region_tour']; ?>">
			                  <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
			                  <button class="btn btn-primary" type="submit " name="btnAccion" value="Agregar">Agregar al Carrito</button>
			                </form>
			                <div>
			                	<?php
									if($producto['Nombre_tour']==='Viaje a Costa Verde'){
										$referencia='CostaVerde.php';
									}else if($producto['Nombre_tour']==='Viaje a Huacachina'){
										$referencia='Huacachina.php';
									}else if($producto['Nombre_tour']==='Viaje a Paracas'){
										$referencia='Paracas.php';
									}else if($producto['Nombre_tour']==='Inca Jungle a Machu Picchu'){
										$referencia='Cusco.php';
									}else if($producto['Nombre_tour']==='Trekking Choquequirao'){
										$referencia='Apurimac.php';
									}else if($producto['Nombre_tour']==='Viaje a Puno'){
										$referencia='Puno.php';
									}else if($producto['Nombre_tour']==='Tambopata Jungle Adventure Tour'){
										$referencia='Tambopata.php';
									}else if($producto['Nombre_tour']==='Tarapoto Aventurero'){
										$referencia='Tarapoto.php';
									}else if($producto['Nombre_tour']==='Chanchamayo y Tarma Magicos'){
										$referencia='Chanchamayo.php';
									}else {
										$referencia='#';
									}
			                	?>
			                  <a href="<?=$referencia?>" class="btn btn-success">Detalles</a>
			                </div>
			              </div>
			              <small class="text-muted">Region <?php echo $producto['Region_tour']; ?></small>
			            </div>
			          </div>
			        </div>
			      <?php } ?>
			    </div>

			</main>

	<?php 
    include '../footer/footer_carrito.php';
    ?>

</body>
</html>