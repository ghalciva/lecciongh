<?php

include_once('Usuarios.php');
include_once('Collector.php');

class UsuariosCollector extends Collector
{
  //muestra los datos
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM usuarios ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Usuarios($c{'idusuario'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  //muestra por id
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM usuarios where idusuario= ? ", array("{$id}"));        
    $ObjDemo = new Usuarios($row[0]{'idusuario'},$row[0]{'nombre'});
    return $ObjDemo;        
  }

  //actualiza los datos
  function updateDemo($id,$nombre) {
    $insertrow = self::$db->getRows("UPDATE public.usuarios SET nombre= ? WHERE idusuario= ? ", array("{$nombre}",$id));        
  }

  //elimina los datos
  function deleteDemo($id) {
    $deleterow = self::$db->getRows("DELETE from public.usuarios WHERE idusuario= ? ", array("$id"));        
  }

  //guarda los datos ingresador
  function insertDemo($nombre) {
    $insertrow = self::$db->getRows("INSERT INTO public.usuarios (nombre) VALUES (?) ",  array("{$nombre}"));
  }

  //ver los perfiles
  function showPerfil($id){
    $row = self::$db->getRows("SELECT * FROM perfil where idperfil= ? ", array("{$id}"));        
    $ObjDemo = new Perfil($row[0]{'idperfil'},$row[0]{'nombre'});
    return $ObjDemo;  
  }

  //guarda los datos ingresador
  function insertUsuarios($nombre,$tipo,$fecha,$imagen) {
    $insertrow = self::$db->getRows("INSERT INTO public.perfil (nombre) (tipo) (fecha) (imagen) VALUES (?) ",  array("{$nombre}","{$tipo}","{$fecha}","{$imagen}",));
  }

}
?>

