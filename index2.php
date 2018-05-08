<!DOCTYPE html>
<html>
<head>
	<title>
		Laboratorio 1
	</title>
	<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
	<!-- <script src="insertar2.js" type="text/javascript"></script> -->
</head>
<body>

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<div class="container">
  <form>
   <div class="form-group">
     <p>
      <label>Codigo_barra:</label> <br>
      <input id="codigo_barra" class="form-control" type="text" placeholder="Nombre..."><br>
    </p>
    <p>
      <label>Descrpcion:</label> <br>
      <input id="descripcion" class="form-control" type="text" placeholder="Apellido..."><br>
    </p>
    <p>
      <label>Precio:</label> <br>
      <input id="precio" class="form-control" type="text" placeholder="Cedúla"> <br>
    </p>
    <p>
      <label>cantidad:</label> <br>
      <input id="cantidad" class="form-control" type="text" placeholder="Cedúla"> <br>
    </p>
    <p>
      <label>Monto:</label> <br>
      <input id="monto" class="form-control" type="text" placeholder="Cedúla"> <br>
    </p>
    <button id="adicionar" class="btn btn-success" type="button">Adicionar a la tabla</button>
  </div>
</form>

<p>Elementos en la Tabla:
  <div id="adicionados"></div>
</p>
<table  id="mytable" class="table table-bordered table-hover ">
  <tr>
    <th>Codigo_articulo</th>
    <th>Descripción</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Monto</th>
    <th>Eliminar</th>

  </tr>
</table>

</div>
<script type="text/javascript">
  $(document).ready(function() {
//obtenemos el valor de los input

$('#adicionar').click(function() {
  var codigo_barra = document.getElementById("codigo_barra").value;
  var descripcion = document.getElementById("descripcion").value;
  var precio = document.getElementById("precio").value;
  var cantidad = document.getElementById("cantidad").value;
  var monto = document.getElementById("monto").value;

  var i = 1; //contador para asignar id al boton que borrara la fila
  var fila = '<tr id="row' + i + '"><td>' + codigo_barra + '</td><td>' + descripcion + '</td><td>' + precio + '</td><td>' + cantidad + '</td><td>' + monto + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila

  i++;

  $('#mytable tr:first').after(fila);
    $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
    var nFilas = $("#mytable tr").length;
    $("#adicionados").append(nFilas - 1);
    //le resto 1 para no contar la fila del header
    document.getElementById("descripcion").value ="";
    document.getElementById("precio").value = "";
    document.getElementById("cantidad").value = "";
    document.getElementById("monto").value = "";
    document.getElementById("codigo_barra").value = "";
    document.getElementById("codigo_barra").focus();
  });
$(document).on('click', '.btn_remove', function() {
  var button_id = $(this).attr("id");
    //cuando da click obtenemos el id del boton
    $('#row' + button_id + '').remove(); //borra la fila
    //limpia el para que vuelva a contar las filas de la tabla
    $("#adicionados").text("");
    var nFilas = $("#mytable tr").length;
    $("#adicionados").append(nFilas - 1);
  });
});
</script>
</body>
</html>