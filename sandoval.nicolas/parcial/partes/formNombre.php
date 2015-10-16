<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 


session_start();
if(isset($_SESSION['usuario']))
{  
?>

    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="cambiarNombre();return false;">

        <h2 class="form-ingreso-heading">Cambie su nombre</h2>

        <label for="nombre" class="sr-only">nombre</label>
                <input type="nombre" id="nombre" class="form-control" required="" value="<?php echo $_SESSION['usuario']; ?>">
        
          
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>


    </div> <!-- /container -->

<?php 
}
else
{    
  echo"<h3>usted no esta logeado. </h3>";?>         
  
<?php  
}  
?>