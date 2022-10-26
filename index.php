<?php
//creamos constante
define('APP','Location: http://localhost/00buboba/');

include_once("control/funciones.php");

if(!isset($_SESSION['count'])){
session_start(); 

$_SESSION['count']=0;

$id = session_id();
$cookie_name = "00buboba";
$cookie_value = $id;
$time=(time() + (86400 * 30));
setcookie($cookie_name, $cookie_value, $time );
}

if(!isset($_COOKIE[$cookie_name]) ){

$_SESSION['p1']=0;
$_SESSION['p2']=0;
$_SESSION['p3']=0;
$_SESSION['p4']=0;
$_SESSION['p5']=0;
$_SESSION['p6']=0;
$_SESSION['p7']=0;
$_SESSION['p8']=0;
$_SESSION['p9']=0;
$_SESSION['p10']=0;
$_SESSION['p11']=0;
$_SESSION['p12']=0;
$_SESSION['CamisetaTrebol']=0;
$_SESSION['CamisetaTriangulo']=0;
$_SESSION['CalcetinesTrebol']=0;
$_SESSION['CalcetinesTriangulo']=0;
$_SESSION['pos']=1;
include("carrito.php");

}else{
++$_SESSION['count'];
include("control/funcioniniciada.php");
cargar_bd();

include("carrito.php");

}
if(isset($_COOKIE[$cookie_name])){
 //   var_dump($bdcarrito);
 include('VisualizarCarrito/mostrarcarrito.php');
}



?>
