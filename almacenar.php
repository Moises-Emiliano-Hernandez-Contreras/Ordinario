<?php 
if ($_POST) {      
      $fecha=$_POST['fecha'];
      $tipo=$_POST['tipo'];
      $total=$_POST['total'];
      $cantidad=$_POST['Cantidad'];
      $descuento=$_POST['descuento'];
      $desc_total=$_POST['Desc_total']; 
      include_once 'conexion.php';
      $sql_insertar='INSERT INTO ventas(fecha,tipo,total,cantidad,desc_porcentaje,desc_total)
       value (?,?,?,?,?,?)';
      $insertar=$pdo->prepare($sql_insertar);      
}else{
      header('Location:index.php');
}
      
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- CDN del JQUERY -->         
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
            //creación autmatica del modal
            $( document ).ready(function() {
                  $('#myModal').modal('toggle')
                  //redireccion del modal
                  document.getElementById("Cerrar").addEventListener('click', function(){
                  location.assign("index.php")
                  })                  

           
      
      });      
      </script>
    <title>Venta exitosa</title>
  </head>
  <body>    
      <?php if($insertar->execute(array($fecha,$tipo,$total,$cantidad,$descuento,$desc_total))): ?>
      <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
      tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" id='myModal'>
            <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Finalizar venta</h4>                        
                  </div>
                  <div class="modal-body text-center">
                        <h3>
                              <?php echo 'Venta por exitosa';?>
                        </h3>
                        <img src="https://cdn.pixabay.com/photo/2017/01/13/01/22/ok-1976099_960_720.png"
                        alt="Venta exitosa" width="50%">
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-success" 
                  data-bs-dismiss="modal" id="Cerrar">Salir</button>        
                  </div>
            </div>
            </div>
      </div>            
      <?php endif; ?>      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
