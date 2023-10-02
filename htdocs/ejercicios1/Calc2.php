<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form method="get" action="/ejercicios1/Calc2.php">
        <input type="text" name="numero1" id="numero1">
        <input type="text" name="numero2" id="numero2">
        <input type="submit" value="Sumar" name="submit">
        <input type="submit" value="Restar" name="submit">
        <input type="submit" value="Multiplicar" name="submit">
        <input type="submit" value="Dividir" name="submit">

    </form>

    <?php
    $resultado = 0;
    if (isset($_GET['submit'])) {
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $operador = $_GET ["submit"];

        if (is_numeric($numero1) && is_numeric($numero2)) {
            switch ($operador) {
                case 'Sumar':
                    $resultado = $numero1 + $numero2;
                    break;
                case 'Restar':
                    $resultado = $numero1 - $numero2;
                    break;
                case 'Multiplicar':
                    $resultado = $numero1 * $numero2;
                    break;
                case 'Dividir':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        echo "No se puede dividir entre 0";
                    }
                    break;
                default:
                    echo "Operador no válido";
            }
        } else {
            echo "Por favor, ingresa números válidos";
        }
    }
    echo "<br>Resultado = " . $resultado;


    ?>
</body>

</html>