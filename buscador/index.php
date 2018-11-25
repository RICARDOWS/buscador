<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Buscador</title>
    <link rel="stylesheet" href="assets\css\bootstrap.css">
  </head>


  <body>

    <div class="container">


  <div class="container">
      <h1>Buscador de tesis</h1>
  </div>




    </div>
<div class="container">
  <form class="form-group" action="buscar.php" method="post">
    <input type="text" name="nombre" placeholder="Ingrese nombre" required>

    <label>Carrera: </label>
    <select id="item">
    <option value="todas">Todas</option>
    <option value="sistemas">Ing. Sistemas</option>
    <option value="turismo">Turismo</option>
    </select>

    <input type="submit" name="submit" value="Buscar">
  </form>
</div>


  </body>
</html>
