<?php
//$a == $b Igual TRUE si $a es igual a $b después de la manipulación de tipos.
//$a === $b Idéntico TRUE si $a es igual a $b, y son del mismo tipo.
//$a != $b Diferente TRUE si $a no es igual a $b después de la manipulación de tipos.
//$a <> $b Diferente TRUE si $a no es igual a $b después de la manipulación de tipos.
//$a !== $b No idéntico TRUE si $a no es igual a $b, o si no son del mismo tipo.
//$a < $b Menor que TRUE si $a es estrictamente menor que $b.
//$a > $b Mayor que TRUE si $a es estrictamente mayor que $b.
//$a <= $b Menor o igual que TRUE si $a es menor o igual que $b.
//$a >= $b Mayor o igual que TRUE si $a es mayor o igual que $b


//$a and $b And (y) TRUE si tanto $a como $b son TRUE.
//$a or $b Or (o inclusivo) TRUE si cualquiera de $a o $b es TRUE.
//$a xor $b Xor (o exclusivo) TRUE si $a o $b es TRUE, pero no ambos.
//! $a Not (no) TRUE si $a no es TRUE.
//$a && $b And (y) TRUE si tanto $a como $b son TRUE.
//$a || $b Or (o inclusivo) TRUE si cualquiera de $a o $b es TRUE



$a = 15;
if ($a == 10) {
 echo "\$a es igual a 10";
} else if ($a == 12) {
 echo "\$a es igual a 12";
} else if ($a == 15) {
 echo "\$a es igual a 15";
} else {
 echo "\$a NO es ni 10 ni 12 ni 15";
}

$numero_dia = date('N');
$nombre_dia = '';
switch ($numero_dia) {
 case 1:
 $nombre_dia = "Lunes";
 break;
 case 2:
 $nombre_dia = "Martes";
 break;
 case 3:
 $nombre_dia = "Miércoles";
 break;
 case 4:
 $nombre_dia = "Jueves";
 break;
 case 5:
  $nombre_dia = "Viernes";
  break;
  case 6:
  $nombre_dia = "Sábado";
  break;
  case 7:
  $nombre_dia = "Domingo";
  break;
  default:
  $nombre = "No sabemos que día es";
 }
 
?>