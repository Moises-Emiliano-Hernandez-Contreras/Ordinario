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
            var_dump($_POST);                                
      }
      $subtotal=$cantidad*$precio;
      $Desc=$subtotal*$descuento;      
      $total=$subtotal-$Desc;
      echo "Total: ".$total."<br>";
      echo $descuento.'<br>'.$cantidad.'<br>'.$precio.'<br>'.$Desc;
}else{
      header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Document</title>
</head>
<body>
      <main>
            <h2>Total a pagar</h2>
            <h1><?php echo $total; ?> MXN</h1>
      </main>
</body>
</html>
