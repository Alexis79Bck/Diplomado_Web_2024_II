<?php 

$genero = 'Femenino';
$edad = 25;

switch ($genero) {
    case "Femenino":
        $pulsaciones = (220 - $edad) / 10;
        break;
    case "Masculino":
        $pulsaciones = (210 - $edad) / 20;
        break;    
}


echo "Genero: $genero ";
echo "<br />";
echo "Edad: $edad";
echo "<br />";
echo "Nro. de Pulsaciones por 10 Cada Segundos: " . $pulsaciones;
echo "<br />";
echo "<br />";