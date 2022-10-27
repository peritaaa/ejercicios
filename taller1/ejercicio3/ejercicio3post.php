<?php 
    $p_ganados = $_POST['p_ganados'];
    $p_perdidos = $_POST['p_perdidos'];
    $p_empatados = $_POST['p_empatados'];

    $suma = ($p_ganados*3)+($p_perdidos*0)+($p_empatados*1);

    echo "el resultado es de " .$suma;
?>