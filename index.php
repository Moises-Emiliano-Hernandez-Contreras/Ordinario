<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">		
 <!-- CDN del JQUERY -->         
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script>
            //funcion para que carge despues del html
            $(document).ready(function(){
                  //el select
                  let tipo= document.querySelector('#Tipo')
                  //la funcion para que vea el cambio en el select
                  tipo.addEventListener('change', function(){
                        const nombreTipo=tipo.value
                        console.log(nombreTipo)
                        //asigna al precio la cantidad
                        if(nombreTipo=='Magna'){
                              prec=15;
                              document.getElementById('precio').value='15.45'
                        }
                        if(nombreTipo=='Premium'){
                              document.getElementById('precio').value='25.567'
                        }
                              
                  })
            })            
      </script>      
      <title>Venta</title>
</head>
<body>
<?php  include_once 'header.php' ?> 
      <h1 class="text-center my-5">Venta de gasolina</h1>
      <form action="Guardar.php" method="post" 
      class="form-control border w-50 border-success mx-auto mb-3 row">
            <label class="col-form-label ml-4 fs-4 my-2">Fecha:  
                  <input class="float-end w-75" type="date" name="fecha" >
            </label>            
            <label class="col-form-label ml-4 fs-4 my-2">Tipo:
                  <select name="Tipo" id="Tipo" class="float-end w-75">            
                        <option value="vacio"> </option>
                        <option value="Magna">Magna</option>
                        <option value="Premium">Premium</option>
                  </select>
            </label>
            <label class="col-form-label ml-4 fs-4 my-2">Precio:
                  <input class="float-end w-75" type="text" value="" id="precio" name="precio">            
            </label>
            <label class="col-form-label ml-4 fs-4 my-2">Cantidad:
                  <input class="float-end w-75" type="number" min="0" name="cantidad">
            </label>
            <label class="col-form-label ml-4 fs-4 my-2">Descuento
                  <select class="float-end w-75" name="Descuento">            
                  <option value="0"> </option>
                  <option value="0.1">10%</option>
                  <option value="0.2">20%</option>
                  </select>             
            </label>            
                  <button class="btn btn-success form-control my-2 w-25 float-center" type="reset">Cancelar</button>
                  <button class="btn btn-success form-control my-2 w-25 float-end" type="submit">Pagar</button>               
      </form>   
      <?php include_once 'footer.php';?>
</body>
</html>