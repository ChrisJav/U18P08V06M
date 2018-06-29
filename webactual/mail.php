<?php

$destino= "triboquimia@gmail.com";
$nombre=$_Post["nombre"];
$email=$_Post["correro"];
$subject=$_Post["subject"];
$mensage=$_Post["mensaje"];
$contenido="Embre: ". $nombre ."\nEmail: ".$email."n\Subject:".$subject."\nMensaje".$mensage;
mail($destino,"contanto",$contenido);
header("Location:gracias.html");
 ?>
