<?php
    $nombre = "";
    $nacido = "";
    $hm = "";
    $nombre = $_POST["nombre"];
    $nacido = $_POST["nacido"];
    $hm = $_POST["hm"];
    echo "Hola, " . $nombre;
    echo "<br>Fecha de nacimiento: " . $nacido;
    echo "<br>Sexo: " . $hm;
?>
