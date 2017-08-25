<?php

class Perfil
{
    private $idperfil;
    private $nombre;
    private $tipo;
    private $fecha;
    private $imagen;
    
     function __construct($idperfil, $nombre, $tipo, $fecha, $imagen) {
       $this->idPerfil = $idperfil;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
       $this->fecha = $fecha;
       $this->imagen = $imagen;
     }
    
     function setIdPerfil($idperfil){
       $this->idPerfil = $idperfil;
     } 
     function getIdPerfil(){
       return $this->idPerfil;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
     function setImagen($imagen){
       $this->imagen = $imagen;
     } 
     function getImagen(){
       return $this->imagen;
     } 


}

?> 
