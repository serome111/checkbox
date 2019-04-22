<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="UTF-8">
  <title>Ejemplo checkbox</title>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>  
  <script type="text/javascript">
    function ajax(){
      var req = new XMLHttpRequest();

      req.onreadystatechange = function(){
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('tabla').innerHTML = req.responseText;
        }
      }
      req.open('GET', 'Model/vistas/tabla.php', true);
      req.send();
    }
    //creamos una funcion que cada segundo ejecute nuestra funcion ajax que estara llamando los datos (como refrescar)
    setInterval(function(){ajax();}, 1000);
  </script>
</head>

<body onload="ajax()">

  <div class="container">
  <h1 class="text-center">Ejemplo</h1>
</div>


<div class="container">
  <div class="well well-sm text-center">
    <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-success">
				<input type="radio" name="options" id="option1"  autocomplete="off" chacked>listo
			</label>
      <label class="btn btn-danger">
				<input type="radio" name="options" id="option2"  autocomplete="off">
				falta
			</label>
    </div>
  </div>
</div>

<div class="container cold-md-12">
  <table class="table table-sm">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">Dinero?</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody id="tabla">
    
  </tbody>
</table>
</div>
<script src='js/tablacolor.js'></script>
<!--<script src='js/tablacolor.js'></script>-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
 
</body>

</html>
