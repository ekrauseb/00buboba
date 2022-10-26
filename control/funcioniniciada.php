<?php
error_reporting (0);
require_once("./bd/bdprovisional.php");

function cargar_bd(){
global $bdcarrito;
$bdcarrito[1]=$_SESSION['p1'];
$bdcarrito[2]=$_SESSION['p2'];
$bdcarrito[3]=$_SESSION['p3'];
$bdcarrito[4]=$_SESSION['p4'];
$bdcarrito[5]=$_SESSION['p5'];
$bdcarrito[6]=$_SESSION['p6'];
$bdcarrito[7]=$_SESSION['p7'];
$bdcarrito[8]=$_SESSION['p8'];
$bdcarrito[9]=$_SESSION['p9'];
$bdcarrito[10]=$_SESSION['p10'];
$bdcarrito[11]=$_SESSION['p11'];
$bdcarrito[11]=$_SESSION['p12'];
//var_dump($bdcarrito);


}