<?php
$nom = $_GET['nom'];
$asig = $_GET['asig'];
$nota = $_GET['nota'];

echo $nom;
echo "<br>";
echo $asig;
echo "<br>";
if($nota<7){
    echo "reprobado";
}
if($nota>7){
    echo "aprobado";
}
?>