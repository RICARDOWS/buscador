<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Buscador</title>
  <body>
    <h1>Buscador de tesis</h1>
    <?php
    require ("config.php");

    $archivo_id = $_GET['ref'];
    $archivos = mysqli_query($conn, "SELECT * FROM archivos where id='$archivo_id'");

    while ($row = mysqli_fetch_array($archivos)){
        $id=$row["id"];
        $nombre= $row["nombre"];
        $ruta = $row["ruta"]."/";
        $tipo=$row["tipo"];
        $tamaño=$row["size"];
        $carrera=$row["carrera"];
        //<?php $ruta.$nombre
    }
     ?>
     <object
     type="<?php echo $tipo; ?>"
     data="<?php echo $ruta.$nombre ?>"."pdf"
     style="width: 400px; height: 550px; ">
     ERROR (No se encuentra archivo pdf)
     </object>

  </body>
  
</html>
