<?php
//creamos constante
define('APP','Location: http://localhost/00buboba/');


if($_POST['decero']){
var_dump($_POST);
echo "<h1>hola POST<h1>";
$idSess=array(1,$_COOKIE['00buboba']);
session_start($idSess);
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

$cookie_name = "00buboba";
$cookie_value = $idSess[1];
$time=(time() -60);
setcookie($cookie_name, $cookie_value, $time );
if(isset($_COOKIE['00buboba'])){
    echo "no borra". $_COOKIE['00buboba'];
}else{
    echo "cookie borrada;";
}
}
$pagina = file_get_contents("../carrito.php");
$contenido = file_get_contents("");
$html = str_replace("{PAGINA}", $pagina, $contenido);
//ESTO LIMPIA TODO LO DE LA URL
## POR ESO PODREMOS LLAMAR DIRECTAMENTE A index vacío ahora
echo $html;
header(APP);

?>