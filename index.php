
<html>
<head>
   <title>Validar Password</title>
</head>

<body>
<?

function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($clave) > 8){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if($clave != "24081967"){
   
   $error_clave = "La clave No Existe";
   return false;
   }
   $error_clave = "";
   return true;
}

if ($_POST){
   $error_encontrado="";
   if (validar_clave($_POST["clave"], $error_encontrado)){
       ?><a href="http://www.appcreator24.com/open1187583/home">TOQUE AQUÍ PARA ENTRAR A VISIÓN CONEX IPTV</a>
       <? 
   }else{
      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
   }
}

?>
<P>
<form action="index.php" method="post">
Escribe una Contraseña:
<input type=password name="clave">
<input type="submit" value="Enviar">
</form>

</body>
</html>