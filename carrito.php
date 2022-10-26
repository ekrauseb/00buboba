<?php
include_once("control/rutas.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buboba</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilosBot.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link rel="stylesheet" type="text/css" href="css/carrito.css">

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
<?php
include("expositor.php");
?>		
				
<div id="compra" class="explica">
  <p class="titExplica">Su compra</p>
  <p class="explicaGral">Seleccione el producto de su elección de manera que pueda visualizarlo y saber su precio. Si le interesa, pulse en añadir.
  Puede seguir eligiendo productos y añadiendo a su compra. Verá un listado con su selección, y el importe. Cuando tenga decidida su compra, pulse en "consultar" y sabrá si hay existencias de su solicitud.
  Si cambia de idea sobre sus productos, pulse en "Comenzar". Cuando esté conforme, pulse en "comprar"</p>
  <p id="compraok" class="azul">DEBE SELECCIONAR UN PRODUCTO, UNA MARCA Y UN COLOR, Y LUEGO PULSAR EN "VER"<p>
</div>
  </section>

<div class="contenedor" name="inicioDos">
	<fieldset class="form" >
	<div>Producto<br>
	<button id="camisetaboton" class="forma botonproducto" onclick="camiseta2()" > Camiseta </button>
	<button id="calcetinesboton" class="forma botonproducto" onclick="calcetines2()" > Calcetines </button>
	</div>
	</fieldset>
</div>
<div class="contenedor2" name="inicioTres">
	<fieldset class="form" >
	<div>marca<br>
	<button id="trebolboton" class="forma botonproducto" onclick="trebol2()"> Trebol </button>
	<button id="trianguloboton" class="forma botonproducto" onclick="triangulo2()"> Triangulo </button>
	</div>
	</fieldset>
</div>
<form class="contenedor3" name="masdatos">
		<fieldset class="form" >
	<div>Color<br>
    <Select id="color" class="forma form2" value="">
      <Option value="yellow">amarillo</Option>
      <Option value="red">rojo</Option>
      <Option value="olive">oliva</Option>
    </select>
    </fieldset>
</form>
<button id="dibujar" class="forma boton botonver" onclick="recibirDatos()"> Ver </button>
</div>
<div class="contenedor4">
<button id="ver0" class="forma boton" onclick="pasarDatos()" action="control/rutas.php" method="get"> Añadir </button>
<!--nuevo-->
<form action="control/borrar.php" method="post">
<button id="ver1" class="forma boton"  name="decero" value="comenzar">comenzar</button > 
</form>
</div>
<div class="contenedor5">

<!--nuevo contenedor5 clase la tengo que mover u poco-->
	<form  name="masdatos3" action="control/rutas.php" method="post">
	<fieldset class="form" >
	<!--nuevo-->
	<input type="hidden" id="ID3" name="consulta" value="OK">
	<input id="ver2" class="forma boton" type="submit" value="consultar"> 
	<button id="ver2" class="forma botonred"> comprar </button>
	</div>
</fieldset>
</form>
<footer class="contenedorDos">
<p id="explica3" >Esta página utiliza cookies </p>
</footer>
<script src="js/scriptDOS.js"></script>
<!--nuevo-->
<article>
	<!--aqui se carga la cesta
lo de abjo (veremos que se escribe página en el navegador en principio
quedará escondido necesitamos escribir saltos de línea, 
lo mejor es usar una etiqueta pre interpreta los saltoas de linea sin escribir el -->	
<pre>       {PAGINA}</pre>

</article>
<!--nuevo-->

</body>
</html>
