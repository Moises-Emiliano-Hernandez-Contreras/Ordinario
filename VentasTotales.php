<?php 
include_once 'conexion.php';
$statement = $pdo->prepare('SELECT fecha,FORMAT(sum(total),2),sum(cantidad) from ventas group by fecha;');
$statement->execute();
$resultado = $statement->fetchAll();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ventas por Totales</title>
</head>
<body>
      <?php include_once 'header.php';?>
      <h1 class="my-5 text-center">Ventas por día</h1>
      <table class="table table-hover table-bordered my-4 w-50 mx-auto">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Ventas Totales(MXN)</th>
      <th scope="col">Litros vendidos</th>      
    </tr>
  </thead>
  <tbody>
        <?php foreach ($resultado as $dato): ?>
    <tr>
      <td><?php echo $dato['fecha']; ?></td>
      <td><?php echo $dato['FORMAT(sum(total),2)']; ?></td>
      <td><?php echo $dato['sum(cantidad)']; ?></td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>
      <?php include_once 'footer.php';?>
</body>
</html>