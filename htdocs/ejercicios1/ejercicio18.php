<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
        for ($i = 0; $i<=2.01;$i=$i+0.01){
            switch($i){
              case cos($i)>=0:
                echo "<font color='blue'>"."Seno de ".$i." = ".sin($i)."<br>";
                echo "<font color= 'blue'>"."Coseno de ".$i." = ".cos($i)."<br>";
                break;
              case cos($i)<0:
                echo "<font color='blue'>"."Seno de ".$i." = ".sin($i)."<br>";
                echo "<font color= 'red'>"."Coseno de ".$i." = ".cos($i)."<br>";
                break;
            }
        }
    ?>
  </body>
</html>