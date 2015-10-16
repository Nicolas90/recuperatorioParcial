function validarLogin()
{
	var varEmail=$("#email").val();
	var varClave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			email:varEmail,
			clave:varClave
		}
	});

	funcionAjax.done(function(retorno){
		if(retorno.trim()=="ingreso")
		{	
			$("#principal").html("");
			$("#BotonLogin").html("Salir de Sesion");
			Mostrar('votacion');
		}
        else
        {
			MostarLogin();
        }
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");	
	});
}

function deslogear()
{
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno)
	{
		MostrarLogin();
	});	
}

/*

function MostarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	});
	funcionAjax.done(function(retorno){
		$("#botonesABM").html(retorno);
		//$("#sidebar").html("Correcto BOTONES!!!");	
	});
}
*/