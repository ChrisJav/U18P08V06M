<?php
$archivo = "contador.txt"; //1
$abre = fopen($archivo,"r"); //2
$total = fread($abre, filesize($archivo)); //3
fclose($abre); //4
$abre = fopen($archivo, "w"); //5
$total = $total + 1; //6
$grabar = fwrite($abre, $total); //7
fclose($abre); //8
echo "&contador=$total&"; //9
?>