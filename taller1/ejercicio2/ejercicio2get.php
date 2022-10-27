<?php
$nom = $_GET['nom'];
$asig = $_GET['asig'];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$promedio = ($num1+$num2+$num3)/3;

echo $asig;
echo "<br>";
echo $nom;
echo "<br>";
echo " el promedio del estudiante es " .$promedio;
?>