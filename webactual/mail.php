<?php

$destino="triboquimia@gmail.com";
$name="$_REQUEST[name]";
$email="$_REQUEST[email]";
$subject="$_REQUEST[subject]";
$message="$_REQUEST[message]";
$contenido="name :  ".$name ." \nEmail : ". $email ." \nSubject : ". $subject ." \nMessaje  " .$message;
mail($destino,"contanto",$contenido);
header("Location:gracias.html");


?>
