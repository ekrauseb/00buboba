<?php
///nuevo
require_once("bdposiciones.php");
///nuevo
$bdcarrito= array(
1 => 0,
2 => 0,
3 => 0,
4 => 0,
5 => 0,
6 => 0,
7 => 0,
8 => 0,
9 => 0,
10 => 0,
11 => 0,
12 => 0,

);
$cantidad = 0;
function determinar_cantidad($consulta){

determinar_posicion	($consulta);
	global $bdcarrito;
$bdcarrito[$consulta]= $bdcarrito[$consulta]+1;
	global $cantidad;
$cantidad = $bdcarrito[$consulta];
return $cantidad;
	};
	


?>
