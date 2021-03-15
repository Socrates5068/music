<?php
include('header.php')
?>
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <h4>Registrar Usuario</h4>
      <hr style="margin-top:5px;margin-bottom: 5px;">
      <div class="content">
      <div class="panel panel-default">
        <div class="panel-body">
        <form action="storeUsuario.php" method="POST">
          <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="user">Carnet de Identidad</label>
            <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de Identidad">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
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