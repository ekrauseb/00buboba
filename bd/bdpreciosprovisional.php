<?php

$bdprecios= array(
1 => 6,
2 => 6,
3 => 6,
4 => 5,
5 => 5,
6 => 5,
7 => 2,
8 => 2,
9 => 2,
10 => 1,
11 => 1,
12 => 1,

);
$precio_unidad = 0;

function determinar_precio($Pre_consulta){
	global $bdprecios;

	global $precio_unidad;
$precio_unidad = $bdprecios[$Pre_consulta];
return $precio_unidad;
	};
	


?>
