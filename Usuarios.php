<?php

class Usuarios
{
    private $idusuario;
    private $nombre;
    
     function __construct($idusuario, $nombre) {
       $this->idDemo = $idusuario;
       $this->nombre = $nombre;
     }
    
     function setIdUsuario($idusuario){
       $this->idUsuario = $idusuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
