<?php 


$tipoDeDescuento = [
    0.1, 0.2
];

$cantidadCamisasComprada = 6;
$montoTotalCamisasCompradas = 0;
for ($i=0; $i < $cantidadCamisasComprada; $i++) { 
    $montoTotalCamisasCompradas+=rand(50, 1000);
}

if ($cantidadCamisasComprada < 3) {
    $descuento = $montoTotalCamisasCompradas * $tipoDeDescuento[0];
    $descuentoObtenido = "10%";    
}else{
    $descuento = $montoTotalCamisasCompradas * $tipoDeDescuento[1];
    $descuentoObtenido = "20%";
}

echo "Cantidad de Camisas Compradas: $cantidadCamisasComprada ";
echo "<br />";
echo "Monto Total de las Camisas Compradas: $montoTotalCamisasCompradas";
echo "<br />";
echo "Descuento Obtenido por la Compra: $descuentoObtenido ";
echo "<br />";
echo "Monto del Descuento: $descuento ";
echo "<br />";
echo "Monto Total - Descuento: " . $montoTotalCamisasCompradas - $descuento;
echo "<br />";
echo "<br />";