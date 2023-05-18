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
            <a class="navbar-brand" href="#">Tarea clase 9</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Matematicas.php">Matematicas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="colores.php">Colores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="Comparar.php">Comparar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tablas.php">Tablas</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <h2>COMPARAR 2 NUMEROS</h2>
    <form action="Comparar.php" method="post">
        <label for="n1">Primer número</label>
        <input type="number" name="n1" id= "n1">

        <label for="n2">Segundo número</label>
        <input type="number" name="n2" id= "n2">

        <input type="submit" value="Comparar">
    </form>    


    <?php
    if (isset($_POST['n1'])&& isset($_POST['n2'])){
        $n1= $_POST['n1'];
        $n2= $_POST['n2']; 

        //otro if :v
        if($n1==$n2) {
            echo "Estos numeros son Iguales";    
        }
        elseif($n1<$n2) {
            echo "El número ".$n1." es menor que: ".$n2; 
        }
        elseif($n1>$n2) {
            echo "El número ".$n1." es mayor que: ".$n2;
        }
        

    }
    ?>
    
</body>
</html>