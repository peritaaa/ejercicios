<?php

 $volantes = $_POST['volantes'];
 $posters = $_POST['posters'];
 $t_presentacion = $_POST['t_presentacion'];

 echo "total de los volantes: " .$volantes*2000;
 echo "<br>";
 echo "total de los posters: " .$posters*5000;
 echo "<br>";
 echo "total de los t_presentacion: " .$t_presentacion*500;
 echo "<br>";

 $suma = ($volantes*2000)+($posters*5000)+($t_presentacion*500);

 echo "el pago total es" .$suma;

?>