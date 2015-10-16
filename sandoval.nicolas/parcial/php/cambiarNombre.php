<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");


session_start();
$nuevoUsuario = new usuario();

$nuevoUsuario->nombre=$_POST['nombre'];
$nuevoUsuario->id=$_SESSION['id'];

$nuevoUsuario->CambiarNombre();

$_SESSION['usuario']=$nuevoUsuario->nombre;
	
echo $_SESSION['id'];
?>