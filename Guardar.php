<?php
if ($_POST) {      
      $fecha=$_POST['fecha'];
      $tipo=$_POST['Tipo'];
      $precio=$_POST['precio'];
      $cantidad=$_POST['cantidad'];
      $descuento=$_POST['Descuento'];
      if ($fecha==null||$cantidad==null||$precio==null){
            header('location:index.php');
            die();
      }else{
            $subtotal=$cantidad*$precio;
            $Desc=$subtotal*$descuento;      
            $total=$subtotal-$Desc;                                        
      }
}else{
      header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">      
      <title>Finalizar</title>
</head>
<body>
      <?php include_once 'header.php'?>
      <main class="border my-5 mx-auto  h-50 w-50 p-5 text-center rounded-3 shadow-lg">
      <h2 class='fs-2'>Total a pagar:</h2>                  
      <h1 class='fs-1 mt-3' ><?php echo $total;?> MXN</h1>
            <form action="almacenar.php" method='post'>
                  <input type="hidden" value='<?php echo $fecha;?>' name='fecha'>
                  <input type="hidden" value='<?php echo $tipo; ?>' name="tipo">
                  <input type="hidden" value="<?php echo $total; ?>" name="total"> 
                  <input type="hidden" value="<?php echo $cantidad; ?>" name="Cantidad"> 
                  <input type="hidden" value="<?php echo $descuento*100; ?>" name="descuento">
                  <input type="hidden" value="<?php echo $Desc; ?>" name="Desc_total"> 
                  <input type="submit" value="Finalizar venta" class='btn btn-success mt-3 rounded-3'>
            </form>                        
      </main>
      <?php include_once 'footer.php';?>
</body>
</html>
