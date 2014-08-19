<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idregistro=$_POST["idregistro"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("UsuarioControlador.php");
$UsuarioControladorObj = new UsuarioControlador();
$UsuarioControladorObj->updateDemo($idregistro,$nombre);

echo "id :".$idregistro." actualizado a:".$nombre." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
