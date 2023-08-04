<?php
//include("conexion.php");
include("compras.php");
include '../header/header_carrito.php';
?>
<div class="row justify-content-center">
<div class="col-6 p-4 ">
    <h3 class="text-center p-4">Carrito de Compras</h3>
    <?php
    if(!empty($_SESSION['carrito'])){
    ?>
      <table class="table table-light table-bordered text-center ">
        <thead class="table-secondary">
          <tr>
            <th scope="col">Nombre del Tour</th>
            <th scope="col">Imagen Referencial</th>
            <th scope="col">Region</th>
            <th scope="col">Dias</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
            <th scope="col">--</th>
          </tr>
        </thead>
      
        <tbody>
        <?php $total=0;?> 
        <?php 
        foreach($_SESSION['carrito'] as $indice=>$producto){
        ?>
           <tr>
            <td width="20%" ><?php echo $producto['NOMBRE'] ?></td>
            <td width="20%" ><img src="../<?php echo $producto['IMAGEN'];?>" alt="" width="120px" height="100px"></td>
            <td width="10%">Region <?php echo $producto['REGION']; ?></td>
            <td width="10%"><?php echo $producto['DIAS'] ?> Dia(s)</td>
            <td><?php echo $producto['PRECIO']?></td>
            <td><?php echo $producto['CANTIDAD']?></td>
            <td><?php echo number_format($producto['CANTIDAD']*$producto['PRECIO'],2);?></td>
            <td>
              <form action="" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $producto['ID'] ?>">
              <button class="btn btn-danger" name="btnAccion" value="Eliminar" type="submit">Eliminar</button>
              </form>
              
            </td>  
          </tr>
          <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);?>
          <?php } ?>

          <tr>
            <td colspan="6" align="right">Total</td>
            <td>S/. <?php echo number_format($total,2)?> </td>
            <td></td>
        </tbody>
      </table>

      <?php }else{ ?> 
        <div class="alert alert-success text-center">
           <h3>No hay productos en el carrito</h3>
        </div>
        <?php }  ?>
    </div>
</div>
 
    <?php include '../footer/footer_carrito.php';?>

