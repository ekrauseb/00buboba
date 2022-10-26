<?php


function en_que_posicion($OrdenLlegada){
    switch($OrdenLlegada){
    case 1:
    ?>
    <script>
    escribirEnPosicionUno(VarCant, VarProd, VarColores, VarSubtot);
    </script>
    <?php
    break;
    case 2:
    ?>
    <script>
    escribirEnPosicionDos(VarCant, VarProd, VarColores, VarSubtot);
    </script>
    <?php
    break;
    case 3:
    ?>
    <script>
    escribirEnPosicionTres(VarCant, VarProd, VarColores, VarSubtot);
    </script>
    <?php
    break;
    case 4:
    ?>
    <script>
    escribirEnPosicionCuatro(VarCant, VarProd, VarColores, VarSubtot);
    </script>
    <?php
    break;
    
    //finswitch
    }
    //finfuncion
    }







?>