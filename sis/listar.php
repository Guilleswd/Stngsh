<!DOCTYPE html>
<html lang="es">

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
</head>
<body>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                  <?php
                  include 'menu.php'
                  ?>
                </div>

                <div class="col-md-12">
                  <h1><center>LISTADO DE CLIENTES</center></h1>
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
                        $db=mysql_connect("localhost","root","");
                        mysql_select_db("bdngsh",$db);
                        $sql="select *from clientes";
                        $result = mysql_query($sql);
                      ?>
                  
                     <?php
                      while ($row= mysql_fetch_row($result)) {
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
         <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>   
</body>
</html>
