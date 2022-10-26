<?php
//no la podemos traer global la copiamos
define('APP','Location: http://localhost/00buboba/');

function pasar_consulta(){
    var_dump($_POST);
    if(isset($_SESSION['count'])){
        prin_r($_SESSION);
    }
}




if($_POST){
//    echo "<h1>hola POST</h1>";
//    pasar_consulta();
header(APP. 'VerCompra/compra.php');
die();
}







include_once("funciones.php");

if (isset($_GET["idprod"])) {
    $indice_producto = $_GET["idprod"];
    // LLAMAMOS A LA FUNCIÓN es de funciones que está en esta carpeta
determinar_producto($indice_producto);

$contenido = file_get_contents("./VisualizarCarrito/mostrarcarrito.php");
$html = str_replace("{PAGINA}", $contenido);
//ESTO LIMPIA TODO LO DE LA URL
## POR ESO PODREMOS LLAMAR DIRECTAMENTE A DETERMINAR PRODUCTO
echo $html;
//header(APP);

}

?>	