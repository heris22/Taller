<?php

include('DataBaseControlador.php');
include('usuario.php');

class UsuarioControlador extends Collector
{
    
  function mostrarusuario($id) {
    $row = self::$db->getRow("SELECT * FROM registro where idregistro= ?", array("{$id}"));
    $Objusuario= new usuario($row[0]{'idregistro'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'email'},$row[0]{'contrasenia'});
    return $Objusuario;  
  }
    
  function createusuario($nombre,$apellido,$email,$contrasenia) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.clasedemo (idregistro, nombre, apellido, email, contrasenia) VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$apellido}", "{$email}", "{$contrasenia}"));
  }

  function readusuario() {
    $rows = self::$db->getRows("SELECT * FROM registro ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idregistro'},$c{'nombre'},$c{'apellido'},$c{'email'},$c{'password'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  } 

  function updateDemo($id,$nombre,$apellido,$email,$contrasenia) {    
    $insertrow = self::$db->updateRow("UPDATE clasedemo.registro SET registro.nombre = ?  WHERE registro.idregistro = ? ", array( "{$nombre}",$id));
  }  

  function deleteDemo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedemo.registro WHERE idregistro= ?", array("{$id}"));
  }  
}

?>
