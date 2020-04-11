<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <style>
table{
text-align:center;

}
input.form-control {

width:auto;
}

select.form-control {

width:auto;
}

  </style>
  <body>
<h1>Agregar reporte</h1><br>
<table class="table table-bordered" >
  <thead>
    <tr>
<th>Siga</th>
<th>Tipo</th>
<th>Sede</th>
<th>Observaciones</th>
<th>AGREGAR</th>

</tr>
</thead>


 
      <tr>
        <form>
    <td><input type="number" class="form-control"  id="siga" value="2021"></td>
    <td><select class="form-control" id="tipoSiga">
    <option>Actividad</option>
    <option>Incidente</option>
    <option>Problema</option>
    
  </select></td>

    <td><input type="text" class="form-control" placeholder="Localidad" id="localidad" ></td>
     <td><select class="form-control" id="obs">
    <option>FDS</option>
    <option>Degradación</option>
    <option>Aumento de velocidad</option>
    <option>Nuevo servicio</option>
    <option>Retiro</option>
    <option>Trabajo programado</option>
    <option>Otros</option>
  </select></td>
<td>
  <input type="submit" class="btn btn-success" value="Agregar reporte" id="agregar-reporte" ></td>


     </form>
    </tr>
</table>

<br><br><br>

    <h1>Reportes Actuales<h1><br>
<table class="table table-bordered" >
  <thead>
    <tr>
<th>Siga</th>
<th>Tipo</th>
<th>Sede</th>
<th>Observaciones</th>

</tr>
<thead>


  <tr>
    <td>2021002154</td>
    <td>Actividad</td>
    <td>Abierto</td>
     <td>FDS</td>
    </tr>
      
</table>


    <script src="script.js"></script>
  </body>
</html>