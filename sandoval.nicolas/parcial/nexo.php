<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'registrar':
		include("partes/formRegistro.php");
		break;
	case 'desloguear':
			include("php/deslogearUsuario.php");
		break;	
	case 'MostrarLogin':
			include("partes/formLogin.php");
		break;
	case 'MostrarRegistro':
			include("partes/formRegistro.php");
		break;
	case 'MostrarNombre':
			include("partes/formNombre.php");
		break;
	case 'desloguear':
			include("php/deslogearDni.php");
		break;		



	default:
		# code...
		break;
}

 ?>