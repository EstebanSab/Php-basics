<?php
//La sintaxis básica se compone de:
//array(clave => valor, );
//Donde clave, puede ser un entero:

$nombres_de_mujer = array(0 => 'Ana', 1 => 'Gabriela', 2 => 'Cecilia', );

$mi_array = array('Ana', 'Gabriela', 'Julia', 'Noelia');
echo $mi_array[1]; // imprime  'Gabriela'


//O una cadena de texto:
$telefonos_de_amigos = array('Juan' => '15 4017-2530',
 'Javier' => '4921 – 1200',);

echo $telefonos_de_amigos['Juan']; // imprime 15 4017-2530


 $datos_de_juan = array(
  'apellido' => 'Pérez',
  'Fecha de nacimiento' => '23-11-1970',
  'Teléfonos' => array('Casa' => '4310-9030',
  'Móvil' => '15 4017-2530',
  'Trabajo' => '4604-9000'),
  'Casado' => True,
  'Pasaporte' => False,
); 



//Para declararlo
$mi_array = array();



//Modificando elementos
//Para modificar un elemento, basta con acceder a éste y asignare un nuevo valor:
$mi_array = array('Ana', 'Gabriela', 'Julia', 'Noelia');
$mi_array[2] = 'Ximena';
echo $mi_array[2]; // imprimirá Ximena

//Agregar elementos
//Para agregar un valor a un array existente, se asigna éste a un índice vacío:
$mi_array = array('Ana', 'Gabriela', 'Julia', 'Noelia');
$mi_array[] = 'Cecilia';
?>