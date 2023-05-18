<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea de clase 9</title>
</head>
<body>
    <!--copiamos el nav desde el index-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Tarea de clase 9</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matematicas.php">Matematicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="colores.php">Colores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comparar.php">Comparar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas.php">Tablas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Se crea la seccion para los botones de colores -->
<section>
<h2>Botones de Colores</h2>

<!DOCTYPE html>
<html>
<head>
    <title>Botones de colores</title>
</head>
<body>
    <form action="Colores.php" method="POST">
        <input type="submit" name="color" value="Amarillo" class="color-button1">
        <input type="submit" name="color" value="Rosa" class="color-button2">
        <input type="submit" name="color" value="Morado" class="color-button3">
        <input type="submit" name="color" value="Gris" class="color-button4">
        <input type="submit" name="color" value="Verde Limon" class="color-button5">
    </form>

    <?php
    if (isset($_POST['color'])) {
        $colorSeleccionado = $_POST['color'];

        switch ($colorSeleccionado) {
            case 'Amarillo':
                $color = '#ECFF00';
                break;
            case 'Rosa':
                $color = '#FF008B';
                break;
            case 'Morado':
                $color = '#AE00FF';
                break;
            case 'Gris':
                $color = '#989699';
                break;
            case 'Verde Limon':
                $color = '#7DF028';
                break;
            default:
                $color = '#000000';
                break;
        }
        echo "<h3>El color seleccionado es: <span style='color:$color;'>$colorSeleccionado</span></h3>";


    }
    ?>
    
</body>
</html>