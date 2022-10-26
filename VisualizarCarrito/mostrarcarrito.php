


<div class='carrito'>
<script src="./js/script.js"></script>
<h2>Su cesta:</h2>

<div Id="posicionUno" class='carritoPosicionUno'>
<div Id="CantYProd1" class='CantidadYProducto'>
</div>
<div Id="ColoresySubtot1" class='ColoresySubtotal'>
</div>
<div Id="ColoresySubtot1BB" class='ColoresySubtotal'>
</div>
</div>

<div Id="posicionDos" class='carritoPosicionDos'>
<div Id="CantYProd2" class='CantidadYProducto'>
</div>
<div Id="ColoresySubtot2" class='ColoresySubtotal'>
</div>
<div Id="ColoresySubtot2BB" class='ColoresySubtotal'>
</div>
</div>

<div Id="posicionTres" class='carritoPosicionTres'>
<div Id="CantYProd3" class='CantidadYProducto'>
</div>
<div Id="ColoresySubtot3" class='ColoresySubtotal'>
</div>
<div Id="ColoresySubtot3BB" class='ColoresySubtotal'>
</div>
</div>

<div Id="posicionCuatro" class='carritoPosicionCuatro'>
<div Id="CantYProd4" class='CantidadYProducto'>
</div>
<div Id="ColoresySubtot4" class='ColoresySubtotal'>
</div>
<div Id="ColoresySubtot4BB" class='ColoresySubtotal'>
</div>
</div>
<div Id="Total" class='TotalCompra'>
</div>

</div>

<?php
require_once("segundoRecibe.php");
include_once("enquePosicion.php");
global $bdcarrito;
global $bdprecios;
imprimetoo($bdcarrito,$bdprecios);
$totalparcial=0;
escribir_total();

function imprimetoo($bdcarrito,$bdprecios){
//echo "estoy en imprimetoo<br>";
//var_dump($bdcarrito, $bdprecios);

$cantCamitre=$bdcarrito[1]+$bdcarrito[2]+$bdcarrito[3];
$cantCamitria=$bdcarrito[4]+$bdcarrito[5]+$bdcarrito[6];
$cantCalcetre=$bdcarrito[7]+$bdcarrito[8]+$bdcarrito[9];
$cantCalcetria=$bdcarrito[10]+$bdcarrito[11]+$bdcarrito[12];

//var_dump($cantCamitre,$cantCamitria,$cantCalcetre,$cantCalcetria);

if($cantCamitre>=1){
    ?>
    <script>
    VarProd = "Camiseta Trebol";
    VarCant = <?php echo $cantCamitre; ?>;
    VarColores ="<?php echo coloresCamitre() ?>";
    VarSubtot= <?php echo $cantCamitre * $bdprecios[1]; ?>;
    console.log(VarProd + VarCant + VarColores + VarSubtot);
    </script>  
    <?php
 //aquí cambio el atributo de objeto por lo que obtengo de la función de orden
 // falta todavía ver la indicación de orden que es otro archivo
    $posicion1=$_SESSION['CamisetaTrebol'];
    en_que_posicion($posicion1);
}
if($cantCamitria>=1){
    ?>
    <script>
    VarProd = "Camiseta Triangulo";
    VarCant = <?php echo $cantCamitria; ?>;
    VarColores ="<?php echo ColoresCamiTrian(); ?>";
    VarSubtot= <?php echo  $cantCamitria * $bdprecios[4]; ?>;
    console.log(VarProd + VarCant + VarColores + VarSubtot);
    </script>  
    <?php
//aquí cambio el atributo de objeto por lo que obtengo de la función de orden
$posicion2=$_SESSION['CamisetaTriangulo'];
en_que_posicion($posicion2);
}
if($cantCalcetre>=1){
    ?>
    <script>
    VarProd = "Calcetines Trebol";
    VarCant = <?php echo $cantCalcetre; ?>;
    VarColores ="<?php echo ColoresCalcetre(); ?>";
    VarSubtot= <?php echo  $cantCalcetre * $bdprecios[7]; ?>;
    console.log(VarProd + VarCant + VarColores + VarSubtot);
    </script>  
    <?php
 //aquí cambio el atributo de objeto por lo que obtengo de la función de orden
$posicion3=$_SESSION['CalcetinesTrebol'];
en_que_posicion($posicion3);
}
if($cantCalcetria>=1){
    ?>
    <script>
    VarProd = "Calcetines Triangulo";
    VarCant = <?php echo $cantCalcetria; ?>;
    VarColores ="<?php echo ColoresCalcetrian(); ?>";
    VarSubtot= <?php echo  $cantCalcetria * $bdprecios[10]; ?>;
    console.log(VarProd + VarCant + VarColores + VarSubtot);
    </script>  
    <?php
 //aquí cambio el atributo de objeto por lo que obtengo de la función de orden
$posicion4= $_SESSION['CalcetinesTriangulo'];
en_que_posicion($posicion4);
}
//fin de imprimetoo
}
//pero me queda determinar y escribir el total
function escribir_total(){
    global $bdcarrito;
    global $bdprecios;
    global $totalparcial;
    for ($i=0; $i <13 ; $i++) { 
        
        $totalparcial+=$bdcarrito[$i]*$bdprecios[$i];
    }
 //   echo $totalparcial;
?>
<script>
VarTotal=<?php echo $totalparcial;?>;
escribirTotal(VarTotal);
console.log(VarTotal);
</script>
<?php
}








?>