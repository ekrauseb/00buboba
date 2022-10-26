<?php
include_once('Clasesproductoscarrito.php');
include_once('../bd/bdpreciosprovisional.php');


function setear_color($_Id, Producto $prod){
switch($_Id){
    case 1: case 4: case 7: case 10:
    $prod->setColor_producto("amarillo");
    break;
    case 2: case 5: case 8: case 11:    
    $prod->setColor_producto("rojo");
    break;
    case 3: case 4: case 9: case 12: 
    $prod->setColor_producto("oliva");
    break;
    //finswitccolores
    }
}


function averiguar_generico($_Id){	
//     global $bdprecios;
// var_dump($bdprecios);
//$arrayPedidos=array();   
  switch($_Id) {
    case 1: case 2: case 3:
 //   $CamisetaTrebol = new Producto("Camiseta","Trebol");
    // $CamisetaTrebol->Tipo_producto = "Camiseta";	
    // $CamisetaTrebol->Marca_producto = "Trebol";
//  $CamisetaTrebol->Precio = 6; 
//  $arrayPedidos[]=   crear_producto_carrito($_Id, 1, $cant );
return 1;
        break;
    case 4: case 5: case 6:  
    // $CamisetaTriangulo = new Producto("Camiseta","Triangulo");
    // $CamisetaTriangulo->Tipo_producto = "Camiseta";	
    // $CamisetaTriangulo->Marca_producto = "Triangulo";
// $CamisetaTriangulo->Precio = 5;
// $arrayPedidos[]=     crear_producto_carrito($_Id, 2, $cant);
return 2;
break;
    case 7: case 8: case 9:
    // $CalcetinesTrebol = new Producto("Calcetines","Trebol");
    // $CalcetinesTrebol->Tipo_producto = "Calcetines";	
    // $CalcetinesTrebol->Marca_producto = "Trebol";
// $CalcetinesTrebol->Precio= 2;
// $arrayPedidos[]=     crear_producto_carrito($_Id, 3, $cant);
return 3;
        break;
    case 10: case 11: case 12:
    // $CalcetinesTriangulo = new Producto("Calcetines","Triangulo");
    // $CalcetinesTriangulo->Tipo_producto = "Calcetines";	
    // $CalcetinesTriangulo->Marca_producto = "Triangulo";
// $CalcetinesTriangulo->Precio = 1;
// $arrayPedidos[]=      crear_producto_carrito($_Id, 4, $cant);
return 4;
        break;
  }
//  return $arrayPedidos;
}
// }function ver_cantidad($_Id){
// global $bdcarrito;
// return $bdcarrito[$_Id];
// }



function crear_producto($_Id, $cant){	
    $generico=   averiguar_generico($_Id);
  



switch($generico){
case 1:
    $nombre="CamisetaTrebol" .$_Id;  
    ${$nombre} = new PedidoCarrito($_Id, "Camiseta","Trebol", 6 );
    ## invocamos al set y cargamos cant desde session
 //   $cant= ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ## llamamos a la función del color
    setear_color($_Id,  ${$nombre});
 //   $arrayObjetosCarrito[]=${$nombre};
//    var_dump($arrayObjetosCarrito);
    return ${$nombre};
    break;
case 2:
    $nombre="CamisetaTriangulo" .$_Id;  
    ${$nombre} = new PedidoCarrito($_Id, "Camiseta","Triangulo",5 );
    ## invocamos al set y cargamos cant desde session
 //   $cant= ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ## llamamos a la función del color
    setear_color($_Id,  ${$nombre});  
   // $arrayObjetosCarrito[]=${$nombre};

    return ${$nombre};    
    break;
case 3:
    $nombre="CalcetinesTrebol" .$_Id;  
    ${$nombre} = new PedidoCarrito($_Id, "Calcetines","Trebol",2 );
    ## invocamos al set y cargamos cant desde session
 //   $cant= ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ## llamamos a la función del color
    setear_color($_Id,  ${$nombre});  
 //   $arrayObjetosCarrito[]=${$nombre};
    return ${$nombre};    
    break;
case 4:
    $nombre="CalcetinesTriangulo" .$_Id;  
    ${$nombre} = new PedidoCarrito($_Id, "Calcetines","Triangulo",1 );
    ## invocamos al set y cargamos cant desde session
 //   $cant= ver_cantidad($_Id);
    ${$nombre}->setCantidad_producto($cant);
    ## llamamos a la función del color
    setear_color($_Id,  ${$nombre});    
 //   $arrayObjetosCarrito[]=${$nombre};
 //   var_dump($arrayObjetosCarrito);
    return ${$nombre};   
    break;
    //cierro switch 1
    }
    //cierro funcion
    }
    
    

?>