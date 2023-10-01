<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <p>Contador</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type = "number" name="ncontador" id="ncontador" required>
    <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $ncontador = $_POST["ncontador"];
            
        }
        $contador = 0;
        while($contador<=$ncontador){
            echo "Los bucles while son fáciles<br>"; 
            $contador++;
        }
    ?>
</body>
</html>