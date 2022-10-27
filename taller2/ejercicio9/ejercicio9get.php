<?php
$nom = $_GET['nom'];
$asig = $_GET['asig'];
$uno = $_GET['uno'];
$dos = $_GET['dos'];
$tres = $_GET['tres'];

$multiplicacion = ($uno*0.3)+($dos*0.3)+($tres*0.4);

echo $nom;
echo "<br>";
echo $asig;
echo "<br>";

if($multiplicacion>=4.0){
    echo "aprueba";
}
if($multiplicacion<=4.0){
    echo "no aprueba";
}
?>