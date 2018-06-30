<?php

<<<<<<< HEAD
$destino= "saulperez.sistemas@gmail.com";
$name="$_REQUEST[name]";
$email="$_REQUEST[email]";
$subject="$_REQUEST[subject]";
$message="$_REQUEST[message]";
$contenido="name : ".$name ."\nEmail : ". $email ."n\Subject :". $subject ."\nMessaje" .$message;
mail($destino,"contanto",$contenido);
header("Location:gracias.html");


=======
$destino= "triboquimia@gmail.com";
$nombre=$_Post["nombre"];
$email=$_Post["correro"];
$subject=$_Post["subject"];
$mensage=$_Post["mensaje"];
$contenido="Embre: ". $nombre ."\nEmail: ".$email."n\Subject:".$subject."\nMensaje".$mensage;
mail($destino,"contanto",$contenido);
header("Location:gracias.html");
>>>>>>> 181b0e50000116f124a317759b7008e82edbeb3e
 ?>
