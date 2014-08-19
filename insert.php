<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("UsuarioControlador.php");

$UsuarioControladorObj = new UsuarioControlador();
$UsuarioControladorObj->createDemo($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
