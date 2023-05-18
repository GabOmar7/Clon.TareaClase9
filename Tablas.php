<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea de clase 9</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Tareas clase 9</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Matematicas.php">Matematicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="colores.php">Colores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comparar.php">Comparar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas.php">tablas</a>
        </li>
      </ul>
    </div>
  </div>


</nav>
    <!--Creo botones-->
<section>
    <h2>Tabla de Multiplicar</h2>
    <form action="" method="POST">
        <label for="numero">Introduce el número a Multiplicar:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Buscar">
    </form>

    <?php
    //Hacemos la validación del campo requerido.
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];

        echo "<h5>Tabla del número $numero: </h5>";

        for($i = 1; $i <=12; $i++){
            $resultado = $numero * $i;
            echo $numero. " x ". $i. " = ". $resultado. "<br>";
        }
    }

    ?>

</section>
</body>
</html>