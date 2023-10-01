<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
       $dias[0] = "Domingo";
       $dias[1] = "Lunes";
       $dias[2] = "Martes";
       $dias[3] = "Miércoles";
       $dias[4] = "Jueves";
       $dias[5] = "Viernes";
       $dias[6] = "Sábado";
       $dias_num = 7;
       for ($i = 0; $i < $dias_num; ++$i){
        echo $dias[$i]."<br>";
       }
    ?>
  </body>
</html>