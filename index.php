<!--
http://localhost/sites/php/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consola PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Consola de PHP</h1>
            <p class="lead">Home para consola</p>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase Break</h3>
                    <?php
                    $names = array("Carlos","Ana", "Luis", "Eli","Maria", "Alex ");

                    echo "Break hasta Eli:<br>";
                    foreach ($names as $name) {
                        if($name=="Eli"){
                        break;
                        }
                        echo "Valor: " . $name . "<br>";
                    }echo"<br><br>";
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-danger text-white">
                    <h3>Clase Continue</h3>
                    <?php
                    $names = array("Carlos","Ana", "Luis", "Eli","Maria", "Alex ");

                    echo "Continue en Ana:<br>";
                    foreach ($names as $name) {
                        if($name=="Ana"){
                            continue;
                        }
                        echo "Valor: " . $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase Arrays Numeros</h3>
                    <?php
                    $nums = array(5, 8, 9, 2);

                    echo "Valores del Arreglo:<br>";
                    for ($i = 0; $i < count($nums); $i++) {
                        echo "Posicion: " . $i . " valor: " . $nums[$i] . "<br>";
                    }
                    echo "<br>Valor en posicion 1: " . $nums[1];
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase Arrays Cadenas</h3>
                    <?php
                    $names = array("Ana", "Luis", "Eli", "Alex ");

                    echo "Valores del Arreglo:<br>";
                    for ($i = 0; $i < count($names); $i++) {
                        echo "Posicion: " . $i . " valor: " . $names[$i] . "<br>";
                    }
                    echo "<br>Valor en posicion 1: " . $names[1];
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase Arrays Foreach</h3>
                    <?php
                    $names = array("Ana", "Luis", "Eli", "Alex ");

                    echo "Valores del Arreglo:<br>";
                    foreach ($names as $name) {
                        echo "Valor: " . $name . "<br>";
                    }
                    echo "<br><br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase Bucle While</h3>
                    <?php
                    $nombre = "Marcos";
                    $edad = 22;

                    while ($edad == 22) {
                        echo $nombre . " estas joven, hechale ganas<br><br><br>";
                        $edad = 0;
                    }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-danger text-white">
                    <h3>Clase Bucle For</h3>
                    <?php
                    $nombre = "Marcos";
                    $edad = 22;

                    for ($i = 0; $i < 3; $i++) {
                        echo $nombre . " eres el mejor " . $i . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase Condicional Switch</h3>
                    <?php
                    $nombre = "Marcos";
                    $edad = 20;

                    switch ($edad) {
                        case 10:
                            echo $nombre . " tienes 10 años";
                            break;
                        case 15:
                            echo $nombre . " tienes 15 años";
                            break;
                        case 20:
                            echo $nombre . " tienes 20 años";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase Condicional IF</h3>
                    <?php
                    $nombre = "Marcos";
                    $edad = 4;

                    if ($nombre == "Marcos" && $edad == 24) {
                        echo "Tu nombre es " . $nombre . " y tienes " . $edad . "<br>";
                    } else {
                        echo "No eres Marcos";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase de Variables</h3>
                    <?php
                    $nombre = "Marcos";
                    $edad = 24;

                    echo "Tu nombre es " . $nombre . " y tienes " . $edad . "<br>";
                    echo "Variables de tipo   " . gettype($nombre) . " e " . gettype($edad);
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase de Operadores</h3>
                    <?php
                    $num1 = 8;
                    $num2 = 2;

                    echo "Suma: " . ($num1 + $num2) . "<br>";
                    echo "Resta: " . ($num1 - $num2) . "<br>";
                    echo "Mul: " . ($num1 * $num2) . "<br>";
                    echo "Div: " . ($num1 / $num2) . "<br>";
                    echo "Residuo: " . ($num1 % $num2) . "<br>";
                    echo "Potencia: " . ($num1 ** $num2) . "<br>";

                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>