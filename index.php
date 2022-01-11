<?php
/*       $magna=12;
      $premium=15;   */          
?>
<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">		
      <script src="jquery-3.6.0.min.js"></script>            
      <script>
            $(document).ready(function(){
                  let $tipo= document.querySelector('#Tipo')
                  let precio = document.querySelector('#precio')
                  function cargar(){
                        $.ajax({
                              type:"GET",
                              url:"tipo.php",
                              success: function(response){
                                    //console.log(response)
                                    const tipos=JSON.parse(response)                                    
                                    
                              }
                        })
                  }
                  cargar() 
                  $tipo.addEventListener('change', function(){
                        const nombreTipo=$tipo.value
                        console.log(nombreTipo)
                        if(nombreTipo=='Magna'){
                              prec=15;
                        }
                        if(nombreTipo=='Premium')
                              prec=10;
                  })
            })
            
      </script>
      <title>Venta</title>
</head>
<body>
      <h1>Venta de gasolina</h1>
      <form action="Guardar.php" method="post">
            <p>Fecha:</p>
            <input type="date" name="fecha">
            
            <p>Tipo:</p>
            <select name="Tipo" id="Tipo">            
            <option value="vacio"> </option>
            <option value="Magna">Magna</option>
            <option value="Premium">Premium</option>
            </select> 
            
            <p>Precio:</p>
            <input type="text" value=""
             id="precio" name="precio">            
            
            <p>Cantidad:</p>
            <input type="number" min="0" name="cantidad">
            
            <p>Descuento</p>
            <select name="Descuento">            
            <option value="0"> </option>
            <option value="10">10%</option>
            <option value="20">20%</option>
            </select> 
            
            <button type="reset">Cancelar</button>
            <button type="submit">Pagar</button>      
      </form>
      <?php if(isset($_POST)){ var_dump($_POST);} ?>
</body>
</html>