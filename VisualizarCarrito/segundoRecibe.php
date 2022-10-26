<?php
include_once("enquePosicion.php");

function ColoresCamiTre(){
global $bdcarrito;
$ColoresCamitre=array();
if ($bdcarrito[1]>0){
    $ColoresCamitre[0]="amarillo";
}
if ($bdcarrito[2]>0){
    $ColoresCamitre[1]="rojo";
}
if ($bdcarrito[3]>0){
    $ColoresCamitre[2]="oliva";
}
$CamistaTrebolColores = (implode (" ",$ColoresCamitre ));
//echo $CamistaTrebolColores;
return $CamistaTrebolColores;
}
function ColoresCamiTrian(){
 global $bdcarrito;
 $ColoresCamitrian=array();
  if ($bdcarrito[4]>0){
       $ColoresCamitrian[0]="amarillo";
    }
    if ($bdcarrito[5]>0){
        $ColoresCamitrian[1]="rojo";
 }
 if ($bdcarrito[6]>0){
     $ColoresCamitrian[2]="oliva";
 }
 $CamistaTrianguloColores = (implode (" ",$ColoresCamitrian ));
// echo $CamistaTrianguloColores;
return $CamistaTrianguloColores;

}
function ColoresCalcetre(){
 global $bdcarrito;
 $ColoresCalcetre=array();
 if ($bdcarrito[7]>0){
     $ColoresCalcetre[0]="amarillo";
 }
 if ($bdcarrito[8]>0){
     $ColoresCalcetre[1]="rojo";
 }
 if ($bdcarrito[9]>0){
     $ColoresCalcetre[2]="oliva";
 }
 $CalcetinesTrebolColores = (implode (" ",$ColoresCalcetre ));
 //  echo $CalcetinesTrebolColores;
 return $CalcetinesTrebolColores;
 } 
        
function ColoresCalcetrian(){
global $bdcarrito;
$ColoresCalcetrian=array();
if ($bdcarrito[10]>0){
  $ColoresCalcetrian[0]="amarillo";
 }
if ($bdcarrito[11]>0){
    $ColoresCalcetrian[1]="rojo";
 }
if ($bdcarrito[12]>0){
  $ColoresCalcetrian[2]="oliva";
 }
 $CalcetinesTrianguloColores = (implode (" ",$ColoresCalcetrian ));
 //echo $CalcetinesTrianguloColores;
 return $CalcetinesTrianguloColores;        
 }


?>