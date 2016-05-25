<?php
  $db=mysql_connect("localhost","root","");
  mysql_select_db("bdngsh",$db);
  $nom=$_POST["nom"];
  $db=mysql_connect("localhost","root","");
  $sql="select *from clientes where nom='$nom'";
  $result = mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Código del Icono -->
<!-- Coloca Icono Aqui -->
<link rel="shortcut icon" href="icono/plantilla-logo-sitio-web_00001.ico" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stngsh</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<body>
      <div class="container">
          <div class="row">
              
              <div class="col-md-12">
                <?php
                include 'menu.php'
                ?>
              </div>

              <div class="col-md-12">
                <h1><center>BUSQUEDA DE DATOS</center></h1>
              </div>

              <div class="col-md-12">
                <form action="buscar.php" method="post" class="form-horizontal">
                  <fieldset>

                    <div class="well" width="50%">
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="nom">Nombre</label>  
                        <div class="col-md-4">
                        <input id="nom" name="nom" type="text" placeholder="Nombre" class="form-control input-md" required="">
                          
                        </div>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="boton"></label>
                        <div class="col-md-4">
                          <button id="boton" name="boton" class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                      </div>
                    </div>

                  </fieldset>
                </form>
              </div>

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <td><strong>Nombre</strong></td>
                      <td>Apellido</td>               
                      <td>User</td>               
                      <td>Correo</td> 
                      <td>Contraseña</td>
                      <td>Repita Contraseña</td>  
                    </tr>
                   
                   <?php
                    while ($row = mysql_fetch_row($result)){ 
                      ?>
                        
                      <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>               
                        <td><?= $row[2] ?></td>               
                        <td><?= $row[3] ?></td> 
                        <td><?= $row[4] ?></td> 
                        <td><?= $row[5] ?></td> 
                      </tr>

                    <?php 
                     } 
                    ?>
                </table>
              </div>

          </div>
      </div>

</body>
</html>
