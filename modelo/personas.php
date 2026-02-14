<?php
class Persona {
private $codigo;
private $email;
private $nombre;
private $telefono;

    function __construct($codigo,$email,$nombre,$telefono){
        $this ->codigo=$codigo;
        $this ->nombre = $nombre;
        $this ->telefono=$telefono;
        $this ->email = $email;
    }

    function getCodigo(){
        return $this -> codigo;
    }
    function setCodigo ($codigo){
        $this ->codigo=$codigo;
    }
    ////////////////////////////////////////////////////////////////
        function getEmail(){
        return $this -> email;
    }
    function setNombre ($email){
        $this ->email = $email;
    }
    ////////////////////////////////////////////////////////////////
        function getTelefono(){
        return $this -> telefono;
    }
    function setTelefono ($telefono){
        $this ->telefono=$telefono;
    }
    ///////////////////////////////////////////////////////////////
        function getNombre(){
        return $this -> nombre;
    }
    function setNombre ($nombre){
        $this ->nombre=$nombre;
    }

}
?>