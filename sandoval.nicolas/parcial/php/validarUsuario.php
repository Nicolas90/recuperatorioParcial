<?php 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");

session_start();
$correo=$_POST['email'];
$clave=$_POST['clave'];

$retorno = "no registrado";
$arrayUsuarios = usuario::TraerTodosLosUsuarios();



	foreach ($arrayUsuarios as $usuario) 
	{
		if( ($usuario->correo==$correo) && ($usuario->clave==$clave) )
		{
			setcookie("emailCookie",$correo,  time()+36000 , '/');
			setcookie("claveCookie",$clave,  time()+36000 , '/');
			$_SESSION['usuario']=$usuario->nombre;
			$_SESSION['id']=$usuario->id;
			$retorno="ingreso";
			break;
		}
	}
	
echo $retorno;
?>