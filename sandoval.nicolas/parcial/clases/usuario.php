<?php
class usuario
{
	public $id;
	public $nombre;
	public $correo;
	public $clave;


	public static function TraerTodosLosUsuarios()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodosLosUsuarios()");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}

	public function RegistrarUsuario()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL RegistrarUsuario('$this->nombre','$this->correo','$this->clave')");
		$consulta->execute();			
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public function CambiarNombre()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta = $objetoAccesoDato->RetornarConsulta("CALL CambiarNombre($this->id,'$this->nombre')");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL CambiarNombre('$this->id','$this->nombre'");


		$consulta->execute();
	}



}
?>