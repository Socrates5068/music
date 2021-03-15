<?php
include('conexion.php');
// Cómo subir el archivo
$fichero = $_FILES["file"];

$name = $_FILES["file"]["name"];
$fileNameCmps = explode(".", $name);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $name) . '.' . $fileExtension;

$ruta = "music/".$newFileName;
$titulo = $_POST["titulo"];
$id_user = $_POST["id_user"];



if(move_uploaded_file($fichero["tmp_name"], $ruta)){
    $query ="INSERT INTO canciones VALUES(NULL, '$id_user','$titulo', '$ruta')";
    mysqli_query($conexion, $query) or die("error al insertar cancion".mysqli_error($conexion));
    echo "<script> alert (\"Cancion Registrada\"); </script>";
    echo "<script>location.href='admin.php';</script>";
}else{
    echo 'error al subir';
}

// Redirigiendo hacia atrás
// header("Location: " . $_SERVER["HTTP_REFERER"]);
?>