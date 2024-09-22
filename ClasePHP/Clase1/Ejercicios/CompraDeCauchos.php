<?php 

$tipoDePrecios = [ 
    800, 700
];
$cantidadDeCauchos = 6;

if ($cantidadDeCauchos < 5) {
    $montoTotal = $cantidadDeCauchos * $tipoDePrecios[0];
    $precio = $tipoDePrecios[0];
}else{
    $montoTotal = $cantidadDeCauchos * $tipoDePrecios[1];
    $precio = $tipoDePrecios[1];
}

echo "Cantidad de Cauchos: $cantidadDeCauchos ";
echo "<br />";
echo "Precio Valor por Caucho: $precio";
echo "<br />";
echo "Monto Total: " . $montoTotal;
echo "<br />";
echo "<br />";