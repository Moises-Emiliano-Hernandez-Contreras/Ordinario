<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">		
      <script src="jquery-3.6.0.min.js"></script>            
      <script>
            $(document).ready(function(){
                  let tipo= document.querySelector('#Tipo')
                  tipo.addEventListener('change', function(){
                        const nombreTipo=tipo.value
                        console.log(nombreTipo)
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
            <input type="text" value="" id="precio" name="precio">            
            
            <p>Cantidad:</p>
            <input type="number" min="0" name="cantidad">
            
            <p>Descuento</p>
            <select name="Descuento">            
            <option value="0"> </option>
            <option value="0.1">10%</option>
            <option value="0.2">20%</option>
            </select> 
            
            <button type="reset">Cancelar</button>
            <button type="submit">Pagar</button>      
      </form>      
</body>
</html>