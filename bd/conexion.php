<?php
//echo "hola desde conexión<br>";

# preparar las variables con los datos de conexión
$host='localhost';
$usuario='root';
$clave='';
$db='buboba';
# conectarse a la base de datos
$conn= mysqli_connect($host, $usuario, $clave, $db);
# preparamos la sentencia de MYSQL
# se pueden usar comodines ?, pero aquí no los necesitamos
//traeremos solamente los id y los stock
$sql= "SELECT id, en_stock FROM productos";
#preparamos la consulta
$pre = mysqli_prepare($conn, $sql);
#ejecutamos la consulta
mysqli_stmt_execute($pre);
#asocio los nombres de campo a nombres de variables que usaré
mysqli_stmt_bind_result($pre, $id, $existencias);
#capturo los resultados y los guardo en un array
while(mysqli_stmt_fetch($pre)){
    $registros[]=array('id'=>$id,
    'existencias'=>$existencias);
}
#cerrar la consulta y la conexión
mysqli_stmt_close($pre);
mysqli_close($conn);



?>