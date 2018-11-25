                <?php
                require ("conexion.php");

                $archivo_nombre=$_POST['nombre'];
                $archivo_carrera=$_POST['item'];

                if($archivo_carrera=="todas"){
                $archivos = mysqli_query($conn, "SELECT * FROM archivos where nombre='$archivo_nombre'");
                /*$filas=mysql_num_rows($archivos);
                if ($filas==0){
                  echo "No se encontro ningun registro";
                  echo "<td><a href=index.php> Volver</a>";
                }else{*/
                echo "<table border='1' align='center'>";
                echo "<tr bgcolor='#CCCCCC'>";
                echo "<td><b>ID</b></td>";
                echo "<td><b>Nombre</b></td>";
                echo "<td><b>Ruta</b></td>";
                echo "<td><b>Tipo</b></td>";
                echo "<td><b>Tamaño</b></td>";
                echo "<td><b>Carrera</b></td>";
                echo "</tr>";

                      while ($row = mysqli_fetch_array($archivos)){
                          echo "<tr>";
                          echo "<td>".$row["id"]."</td>";
                          echo "<td>".$row["nombre"]."</td>";
                          echo "<td>".$row["ruta"]."</td>";
                          echo "<td>".$row["tipo"]."</td>";
                          echo "<td>".$row["size"]."</td>";
                          echo "<td>".$row["carrera"]."</td>";

                          //$ruta = $row["ruta"]."/";
                          //echo "<td><img src='$ruta' width='100' height='120'/></td>";
                          echo "<td><a href=archivo.php?ref=".$row['id']."> Abrir</a></td>";
                          //echo "<td><a href=formulario_eliminar.php?ref=".$row['Producto_ID']."> Eliminar </a></td>";
                          echo "</tr>";
                      }}
                      else{
                        $archivos = mysqli_query($conn, "SELECT * FROM archivos where nombre='$archivo_nombre' and carrera='$archivo_carrera'");
                        echo "<table border='1' align='center'>";
                        echo "<tr bgcolor='#CCCCCC'>";
                        echo "<td><b>ID</b></td>";
                        echo "<td><b>Nombre</b></td>";
                        echo "<td><b>Ruta</b></td>";
                        echo "<td><b>Tipo</b></td>";
                        echo "<td><b>Tamaño</b></td>";
                        echo "<td><b>Carrera</b></td>";
                        echo "</tr>";

                        while ($row = mysqli_fetch_array($archivos)){
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["nombre"]."</td>";
                            echo "<td>".$row["ruta"]."</td>";
                            echo "<td>".$row["tipo"]."</td>";
                            echo "<td>".$row["size"]."</td>";
                            echo "<td>".$row["carrera"]."</td>";
                            echo "<td><a href=archivo.php?ref=".$row['id']."> Abrir</a></td>";
                            echo "</tr>";
                        }
                      }
                      //}
                      $conn->close();
                       ?>
