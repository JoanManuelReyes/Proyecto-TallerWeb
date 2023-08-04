<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Carrito de compras</title>
 </head>
 <body>
 <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

      <img  src="../Imagenes_header/imagen1.jpeg">
      <nav>
         <a href="../index.php">Inicio</a>
         <a href="Nosotros.php">¿Quiénes somos?</a>
         <a href="paquetes.php">Paquetes de tours</a>
         <a href="GuiasTuristicos.php">Nuestros guias</a>
         <a href="Contactanos.php">Contactanos</a>
         <a href="iniciar.php">Iniciar Sesion</a>
         
      </nav>
    
      <form method="post" class="form-nav" action="RegionCosta.php">
        <select name="Departamentos" size="" select onChange="window.open(this.options[this.selectedIndex].value,'_self')">
          <option selected>Departamentos</option>
          <option value="Cusco.php">Cuzco</option>
          <option value="Tambopata.php">Tambopata</option>
          <option value="Apurimac.php">Apurimac</option>
          <option value="CostaVerde.php">Lima-Costa Verde</option>
          <option value="Paracas.php">Paracas</option>
          <option value="Chanchamayo.php">Chanchamayo</option>
          <option value="Puno.php">Puno</option>
        </select>
      </form>
      
    </header>
    <main>
      <h1 class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        Redescubre el Perú
      </h1>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="paquetes.php" class="nav-link">catalogo</a></li>
        <li class="nav-item"><a href="carrito.php" class="nav-link">carrito(<?php
        echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>)</a></li>
      </ul>
    </main>
  </div>
  
  <?php
  //print_r($_POST);
  //echo $mensaje;
  //<li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>;
  ?>
  
   <main>
  