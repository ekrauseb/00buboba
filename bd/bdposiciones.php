<?php

function determinar_posicion($consulta){

    switch($consulta){
    case 1: case 2: case 3:
    if($_SESSION['CamisetaTrebol']==0){
        $_SESSION['CamisetaTrebol']=$_SESSION['pos'];
       ++$_SESSION['pos'];
    }
    break;
    case 4: case 5: case 6:
    if($_SESSION['CamisetaTriangulo']==0){
        $_SESSION['CamisetaTriangulo']=$_SESSION['pos'];
        ++$_SESSION['pos'];

    }
    break;
    case 7: case 8: case 9:
        if( $_SESSION['CalcetinesTrebol']==0){
        $_SESSION['CalcetinesTrebol']=$_SESSION['pos'];
        ++$_SESSION['pos'];

    }
    break;
    case 10: case 11: case 12:
        if($_SESSION['CalcetinesTriangulo']==0){
        $_SESSION['CalcetinesTriangulo']=$_SESSION['pos'];
        ++$_SESSION['pos'];
        }
        break;

}

}

?>