<?php 
include_once 'conexion.php';
$wap = $pdo->prepare('select * from ventas order by fecha desc;');
$wap->execute();
$res = $wap->fetchAll(); 
//var_dump($res);  
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
      <?php include_once 'header.php';?>
      <h1 class="my-5 text-center">Ventas por día</h1>
      <table class="table table-hover table-bordered my-4 w-75 mx-auto">
      <thead>
      <tr>
            <th scope="col">ID de venta</th>
            <th scope="col">Fecha</th>
            <th scope="col">Combustible</th>
            <th scope="col">Litros</th>
            <th scope="col">Descuento</th>      
            <th scope="col">Porcentaje(%)</th>
            <th scope="col">Total a pagar</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($res as $dato): ?>
      <tr>
      <td><?php echo $dato['ID']; ?></td>
      <td><?php echo $dato['fecha']; ?></td>
      <td><?php echo $dato['tipo']; ?></td>
      <td><?php echo $dato['cantidad']; ?></td>
      <td><?php echo $dato['desc_total']; ?></td>
      <td><?php echo $dato['desc_porcentaje']; ?></td>
      <td><?php echo $dato['total']; ?></td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>      
      <?php include_once 'footer.php';?>
</body>
</html>