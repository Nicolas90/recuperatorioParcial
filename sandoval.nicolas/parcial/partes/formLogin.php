<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 


session_start();
if(!isset($_SESSION['usuario']))
{  
?>

    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="validarLogin();return false;">

        <h2 class="form-ingreso-heading">Ingrese su email y clave</h2>

        <label for="email" class="sr-only">EMAIL</label>
                <input type="email" id="email" class="form-control" placeholder="ejemplo@gmail.com" required="" value="<?php  if(isset($_COOKIE["emailCookie"])){echo $_COOKIE["emailCookie"];}?>">
        
        <label for="clave" class="sr-only">CLAVE</label>
                <input type="password" id="clave" class="form-control" placeholder="Clave" required=""  value="<?php  if(isset($_COOKIE["claveCookie"])){echo $_COOKIE["claveCookie"];}?>">

        
          
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>


    </div> <!-- /container -->

<?php 
}
else
{    
  echo"<h3>usted '".$_SESSION['usuario']."' esta logeado. </h3>";?>         
  <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
  <!--script type="text/javascript">
  MostarBotones();</script-->

<?php  
}  
?>