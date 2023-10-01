<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="numero1" id="numero1">
        <input type="text" name="numero2" id="numero2">
        <select name="operador" id="operador">
            <option value="Sumar">Sumar</option>
            <option value="Restar">Restar</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select><br><br>
        <input type="submit" name="Calcular" value="Calcular">

    </form>

    <?php
        $resultado=0;
        echo "<br>Resultado = ".$resultado;
        if(isset($_POST['calcular'])){
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operador = $_POST['operador'];

            if(is_numeric($numero1) && is_numeric($numero2)){
                switch($operador){
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
                        if($numero2 != 0){
                            $resultado = $numero1/$numero2;
                        } else{
                            echo "No se puede dividir entre 0";
                        }
                        break;
                    default:
                        echo "Operador no válido";
                }
            } else{
                echo "Por favor, ingresa números válidos";
            }
        }

    ?>
</body>

</html>