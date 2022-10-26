<?php
require_once('../clases/recursoCarrito.php');

function pasar_consulta(){
    // var_dump($_POST);
    // if(isset($_SESSION['count'])){
    //     prin_r($_SESSION);
    // }
if(isset($_COOKIE['00buboba'])){
    $idSess=array(1,$_COOKIE['00buboba']);
    session_start($idSess);
  //  print_r($_SESSION);
  //  echo "<br><br><br><br><br>";
$arreglo_pedido=array();
$formato='<^[p]{1}[0-9]{1,2}$>';
foreach($_SESSION as $key=> $value){
    if(preg_match($formato, $key)){
        $key=filter_var($key, FILTER_SANITIZE_NUMBER_INT);
  //      echo "$key<br>";
        $arreglo_pedido[$key]=$value;
    }
}
//print_r($arreglo_pedido);
$arrayObjetosCarrito=array();
foreach($arreglo_pedido as $key=> $value){
    if($value > 0){
        $arrayObjetosCarrito[]=crear_producto($key, $value);
    }

}
return $arrayObjetosCarrito;
}
}


function imprime($arrayObjetosCarrito){
$acum=0;
    foreach($arrayObjetosCarrito as $EsteProd){
    echo "<div class='CantidadYProducto'>Cantidad: {$EsteProd->getCantidad_producto()}</div>   
    <div class='ColoresySubtotal'>{$EsteProd->getTipo_producto()} marca {$EsteProd->getMarca_producto()},
    <br>color {$EsteProd->getColor_producto()}<br></div><br> ";
    $subto=$EsteProd->getPrecio() * $EsteProd->getCantidad_producto();
    echo "<div class='ColoresySubtotal'>Subtotal: $subto</div><br> ";
    $acum+=$subto;
    }
    echo "<div class='CantidadYProducto'>Total: $acum </div>";
    return $arrayObjetosCarrito;
}

function pinta_existencias($registros, $arrayObjetosCarrito){
    // var_dump($registros);
    // var_dump($arrayObjetosCarrito);
    foreach($arrayObjetosCarrito as $EsteProd){
        for ($i=0; $i < count($registros) ; $i++) { 
            
            for($y=0; $y< count($registros[$i]); $y+=2 ){
            //    echo $registros[$i]['id']. "<br>";
            $esteId=$registros[$i]['id'];
            $stock=$registros[$i]['existencias'];
            // echo $esteId . "<br>";
            // echo $EsteProd->get_Id() . "<br>";
    // si el id coincide con uno de un objeto
    // entonces me interesará pintar si existe es stock lo que piden
        if($esteId==$EsteProd->get_Id()){
    //    echo "coinciden id de base de datos y Objetos pedidos<br>";
    // tenemos que ver si esa cantidad que piden hay en stock
    if($EsteProd->getCantidad_producto()<$stock){
        echo "<div class='ColoresySubtotal'>Hay existencias de {$EsteProd->getTipo_producto()} marca {$EsteProd->getMarca_producto()},
        <br>color {$EsteProd->getColor_producto()}<br></div><br>";
    }
        }

            }
            
        }

    }

}







?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buboba</title>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilosBot.css">
    <link rel="stylesheet" type="text/css" href="../css/productos.css">
    <link rel="stylesheet" type="text/css" href="../css/carrito.css">

</head>
<body>
<section class="seguido">
	<header class="contenedorTres">
	<div class="caja">
	<h3 class="titulo">BuBoBa</h3>
	<p class="rojo">Buen@s Bonit@s Barat@s</p>
	</div>
	<div class="caja cursi">
Tienda online con fines didácticos.
	<h1 class="cursidos">Camisetas y Calcetines<h1>
</div>
	</header>
<div class="compra">
<h1>Su pedido:</h1>
<?php
//echo "hola";
$arrayObjetosCarrito=imprime(pasar_consulta());
?>
</div>
<div class="compraExistencias">
<h1>Existencias:</h1>
<?php
require_once('../bd/conexion.php');
global $registros;
//var_dump($registros);
pinta_existencias($registros, $arrayObjetosCarrito);
?>
<button id="paga" class="boton botonproducto"> <a href="">pagar compra</button>
</div>
</body>
</html>