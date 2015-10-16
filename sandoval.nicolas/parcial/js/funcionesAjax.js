function Mostrar(queMostrar)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno)
	{
		$("#principal").html(retorno);
		$("#sidebar").html("Correcto!!!");	
	});
	funcionAjax.fail(function(retorno)
	{
		$("#principal").html(":(");
		$("#sidebar").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno)
	{
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarLogin()
{
	var funcionAjax=$.ajax(
	{
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno)
	{
		$("#principal").html(retorno);
		$("#sidebar").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno)
	{
		$("#botonesABM").html(":(");
		$("#sidebar").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarRegistro()
{
	var funcionAjax=$.ajax(
	{
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarRegistro"}
	});
	funcionAjax.done(function(retorno)
	{
		$("#principal").html(retorno);
		$("#sidebar").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno)
	{
		$("#botonesABM").html(":(");
		$("#sidebar").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function registrarUsuario()
{
	var varNombre=$("#nombre").val();
	var varEmail=$("#email").val();
	var varClave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/registrarUsuario.php",
		type:"post",
		data:{
			nombre:varNombre,
			email:varEmail,
			clave:varClave
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		MostrarLogin();
	});
}
 
function MostrarNombre()
{
	var funcionAjax=$.ajax(
	{
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarNombre"}
	});
	funcionAjax.done(function(retorno)
	{
		$("#principal").html(retorno);
	});
}

function cambiarNombre()
{
	var varNombre=$("#nombre").val();

	alert(varNombre);

	var funcionAjax=$.ajax({
		url:"php/cambiarNombre.php",
		type:"post",
		data:{
			nombre:varNombre
		}
	});

	funcionAjax.done(function(retorno)
	{
		alert(retorno);
		MostrarLogin();
	});
}
