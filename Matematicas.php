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
            <a class="nav-link disabled" href="Matematicas.php">Matematicas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="colores.php">Colores</a>
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
    <section>
        <h2>Matemáticas</h2>
            <form action="Matematicas.php" method="post">
                <label for="n1">Primer número</label>
                <input type="number" name="n1" id= "n1">

                <label for="n2">Segundo número</label>
                <input type="number" name="n2" id= "n2">

                <label for="Operacion">Operacion:  </label>

                <select name="Operacion" id="Operacion">
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
                <input type="submit" value = "Calcular">
                <input type="reset" value="Limpiar">
            </form>
    </section>
    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $Operacion = $_POST["Operacion"];

        //Definimos las operaciones
        switch ($Operacion) {
            case "sumar";
            $resultado = $n1 + $n2;
            break;
            case "restar";
            $resultado = $n1 - $n2;
            break;
            case "multiplicar";
            $resultado = $n1 * $n2;
            break;
            case "dividir";
            //Nos encargamos del cero
            if($n2 != 0) {
                $resultado = $n1 / $n2;
            } else{
                $resultado = "Cero? en serio? ERROOOOOR!";
            }
            break;
            default;
            $resultado = "Nop.";
            break;
        }
        //ahora la base de la respuesta:
        echo " la respuesta es: ". $resultado;

    }
                
    ?>
    
</body>
</html>