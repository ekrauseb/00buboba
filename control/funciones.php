<?php
error_reporting (0);
require_once("./bd/bdprovisional.php");
require_once("./bd/bdpreciosprovisional.php");
//include ("clases/Clasesproductoscarrito.php");


function determinar_producto($ind_produc){
switch ($ind_produc){
case 1:
// $producto = array("Camiseta","Trebol");
// $color = "amarillo";
$_SESSION['p1']++;
break;
case 2:
// $producto = array("Camiseta","Trebol");
// $color = "rojo";
$_SESSION['p2']++;
break;
case 3:
// $producto = array("Camiseta","Trebol");
// $color = "oliva";
$_SESSION['p3']++;
break;
case 4:
// $producto = array("Camiseta","Triangulo");
// $color = "amarillo";
$_SESSION['p4']++;
break;
case 5:
// $producto = array("Camiseta","Triangulo");
// $color = "rojo";
$_SESSION['p5']++;
break;
case 6:
// $producto = array("Camiseta","Triangulo");
// $color = "oliva";
$_SESSION['p6']++;
break;
case 7:
// $producto = array("Calcetines","Trebol");
// $color = "amarillo";
$_SESSION['p7']++;
break;
case 8:
// $producto = array("Calcetines","Trebol");
// $color = "rojo";
$_SESSION['p8']++;
break;
case 9:
// $producto = array("Calcetines","Trebol");
// $color = "oliva";
$_SESSION['p9']++;
break;
case 10:
// $producto = array("Calcetines","Triangulo");
// $color = "amarillo";
$_SESSION['p10']++;
break;
case 11:
// $producto = array("Calcetines","Triangulo");
// $color = "rojo";
$_SESSION['p11']++;
break;
case 12:
// $producto = array("Calcetines","Triangulo");
// $color = "oliva";
$_SESSION['p12']++;
break;
default:
 $producto = array("productos en","carrito");
 $color = "";
};
if ($producto[0] !== "productos en"){
determinar_cantidad ($ind_produc);
##NUEVO
determinar_precio($ind_produc);
} else {	
$indice_producto = $ind_produc;
}
$produ = $producto[0];
$marc= $producto[1];
global $cantidad;
};

// function añadir_a_carrito(){

// $dir_url = $_SERVER['QUERY_STRING'];
// $vars = array();
// foreach (explode('?pedi', $dir_url) as $pair) {
//     list($key, $value) = explode('&', $pair);
//     $vars[] = array(urldecode($key), urldecode($value));
// };
// foreach ($vars as $valor){
// $numero_solo= filter_var($valor[1], FILTER_SANITIZE_NUMBER_INT);
// determinar_producto($numero_solo);
// };
// };

?>
