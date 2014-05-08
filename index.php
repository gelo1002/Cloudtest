
<!DOCTYPE html>
<html lang = "es">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Inicio de Sesión</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <link href="bootstrap/css/default.css" rel="stylesheet">
   <script src="js/menu.js"></script>
   <script src="js/init.js"></script>

  </head>

  <body>
    <?php 
        if( !empty($_GET["error"]) ){     
?>
       <script> alert('Error de usuario o contraseña');
            </script>    
        
<?php
        }
    ?>
    <section id="index" class="container" >      
      <form id = "submit_login" class="form-signin" role="form" action = "admin/includes/submit_login.php" method = "post">
        <h2 class="form-signin-heading">Inicio de sesion</h2>
          <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-user"></span> 
            <input class = "form-control"  placeholder="Email" name = "email" type = "text" required>
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-qrcode"></span>             
              <input class = "form-control" placeholder="Password" name = "pass" type = "password" required>
          </div><br/>
          <span>
            <a  id="registroU" data-toggle="modal" data-target="#userNew">Nuevo Usuario</a><br/>
          </span>
          <br/>
        <input type="submit" name = "submit_login" id  = "submit_login" class="btn btn-lg btn-primary btn-block" value="Iniciar Sesión" />
      </form>
    </section>


    <!--modal de formulario de cliente--> 
    <div class="modal fade" id="userNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Registro de Usuario</h4>
          </div>
          <div class="modal-body">
              <div id="Formulario">
                  <form id="FrmAddUsers" class="form-horizontal" role="form">

                        <label >Nombre Completo:</label><input  id="nombre" class="form-control" type="text" required/><br/>             
                        <label>Email:</label><input  id="user" class="form-control" type="email" required /><br/>
                       <!-- <label >usuario:</label><input  id="user" class="form-control" type="text" required/><br/>-->
                        <label >Password:</label><input  id="passwd" class="form-control" type="password" required/><br/>
                        <label >Puesto que Solicita:</label>
                        <select id="Mpuesto" class="form-control"><span class="caret"></span></select><br/>  
                        <br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                        <input type="submit" value="Agregar" class="btn btn-primary"/>      
                        
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>