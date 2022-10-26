<?php
include_once("Clasesproductoscarrito.php");
include_once('../bd/bdpreciosprovisional.php');


function setear_color($_Id, Producto $prod){
switch($_Id){
    case 1: case 4: case 7: case 10:
        $prod->setColor_producto("amarillo");
        break;
    case 2: case 5: case 8: case 11:
        $prod->setColor_producto("rojo");
        break;
    case 3: case 6: case 9: case 12:
        $prod->setColor_producto("oliva");
        break;
}   
}

function averiguar_generico($_Id){
    switch($_Id){
            case 1: case 2: case 3:
                return 1;
                break;
            case 4: case 5: case 6:
                return 2;
                break;
            case 7: case 8: case 9:
                return 3;
                break;
            case 10: case 11: case 12:
                return 4;
                break;
    }
}

// function ver_cantidad($_Id){
// global $bdcarrito;
// return $bdcarrito[$_Id];
// }


function crear_producto($_Id, $cant){
$generico= averiguar_generico($_Id);
switch($generico){
case 1:
    $nombre="CamisetaTrebol" .$_Id;
    ${$nombre} = new PedidoCarrito($_Id, "Camiseta", "Trebol", 6);
    ## invocamos al set y cargamos la cantidad desde la session
   // $cant=ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ##llamamos a la funcion del color
    setear_color($_Id , ${$nombre});
    return ${$nombre};
    break;
case 2:
    $nombre="CamisetaTriangulo" .$_Id;
    ${$nombre} = new PedidoCarrito($_Id, "Camiseta", "Triangulo", 5);
    ## invocamos al set y cargamos la cantidad desde la session
    // $cant=ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ##llamamos a la funcion del color
    setear_color($_Id , ${$nombre});
    return ${$nombre};
    break;
case 3:
    $nombre="CalcetinesTrebol" .$_Id;
    ${$nombre} = new PedidoCarrito($_Id, "Calcetines", "Trebol", 2);
    ## invocamos al set y cargamos la cantidad desde la session
    // $cant=ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ##llamamos a la funcion del color
    setear_color($_Id , ${$nombre});
    return ${$nombre};
    break;
case 4:
    $nombre="CalcetinesTriangulo" .$_Id;
    ${$nombre} = new PedidoCarrito($_Id, "Calcetines", "Triangulo", 1);
    ## invocamos al set y cargamos la cantidad desde la session
    // $cant=ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ##llamamos a la funcion del color
    setear_color($_Id , ${$nombre});
    return ${$nombre};
    break;
}
//cerramos switch
}
// cierre funcion

?>