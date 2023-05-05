<?php
$codigo_de_producto = 1284;
$nombre_producto = "Agua Mineral Manantial x 500 ml";
$precio = 3.75;
$vence = False;
$hay_stock = True;
$stock_en_deposito_1 = 20;
$stock_en_deposito_27 = 5;
$stock_en_deposito_73A = 54;

$nombre_de_producto_por_defecto = "Producto";
$nombre_producto = "$nombre_de_producto_por_defecto en oferta";
echo $nombre_producto; // imprime: Producto en oferta

$nombre_producto = "{$nombre_de_producto_por_defecto}s en oferta";
echo $nombre_producto;


$tipo_a = gettype($a);
echo $tipo_a; #imprimirá integer
?>
