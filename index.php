<?php
include('header.php')
?>
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h4>Bienvenido Logueate</h4>
      <hr style="margin-top:5px;margin-bottom: 5px;">
      <div class="content">
      <div class="panel panel-default">
        <div class="panel-body">
        <form action="login.php" method="POST" >
          <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-default"><a href="createUsuario.php">Registrarse</a></button>
        </form>
        </div>
      </div>
      </div>

      <hr style="margin-top:5px;margin-bottom: 5px;">

        </div>
    </div>
  </div>

<?php
  include('footer.php');
?>