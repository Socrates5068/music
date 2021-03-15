<?php
session_start();
if(!empty($_SESSION["usuario"])){
    include('header.php');
    include('conexion.php');
    $id_usuario = $_SESSION["usuario"];
    
    $query2 = "SELECT * FROM users WHERE user = '$id_usuario'";
                    $idss = mysqli_query($conexion, $query2) or die("error al seleccionar id_suario".mysqli_error($conexion));
                    foreach($idss as $ids){
                      $id_usera = $ids["id"];
                    }
?> 
  <div class="container">
    <div class="row">
      <h4>Bienvenido <?php echo $_SESSION["usuario"] ?></h4>
      <hr style="margin-top:5px;margin-bottom: 5px;">
      <div class="content"> </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Agregar Canción</h3>
        </div>
        <div class="panel-body">
          <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="storeCancion.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id_user" value="<?php echo $id_usera ?>">
                <label for="user">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la canción">
            </div>
              <div class="form-group">
                <label class="btn btn-primary" for="my-file-selector">
                  <input required type="file" name="file" id="file" accept=".wav, .mp3, .m4a" multiple>
                </label>
              </div>
              <button class="btn btn-primary" type="submit">Cargar Canción</button>
            </form>
          </div>
        </div>
      </div>

      <!--tabla-->
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Canciones Disponibles</h3>
        </div>
        <div class="panel-body">

          <table class="table table-responsive">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Canción</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    
                    include ('conexion.php');
                    
                    $query1 = "SELECT * FROM users WHERE user = '$id_usuario'";
                    $ids = mysqli_query($conexion, $query1) or die("error al seleccionar id_suario".mysqli_error($conexion));
                    foreach($ids as $id){
                      $id_user = $id["id"];
                    }

                    

                    $query = "SELECT * FROM canciones WHERE id_user = $id_user";
                    $canciones = mysqli_query($conexion, $query) or die("error al seleccionar canciones".mysqli_error($conexion));
                    $n = 1;
                    foreach($canciones as $cancion){
                        echo '
                            <tr>
                                <td>'.$n.'</td>
                                <td>'.$cancion["titulo"].'</td>
                                <td><audio src="'.$cancion["ruta"].'" controls></audio></td>
                            </tr>
                        ';
                        $n++;
                    }
                ?>
            </tbody>
            
          </table>
        </div>
      </div>
      <!-- Fin tabla-->
    </div>
  </div>
<?php
     include('footer.php');
}else{
    echo "<script> alert (\"No puedes entrar aqui\"); </script>";
    echo "<script>location.href='index.php';</script>";
}
    
?>