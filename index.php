<html>
<head>
</head>
<?php
include_once("UsuarioControlador.php");
$UsuarioControladorObj = new UsuarioControlador();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($UsuarioControladorObj->readusuario() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdRegistro() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdRegistro()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdRegistro()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
