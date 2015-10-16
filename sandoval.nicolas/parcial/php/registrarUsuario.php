<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");


$nuevoUsuario = new usuario();

$nuevoUsuario->nombre=$_POST['nombre'];
$nuevoUsuario->correo=$_POST['email'];
$nuevoUsuario->clave=$_POST['clave'];

$nuevoUsuario->RegistrarUsuario();

	
echo "registrado";
?>