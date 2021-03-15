<?php
session_start();
include('conexion.php');
$userLogin = $_POST["user"];
$passwordLogin = $_POST["password"];


$query = "SELECT * FROM users WHERE user = '$userLogin'";
$users = mysqli_query($conexion, $query) or die("error al hacer login.".mysqli_error($conexion));

foreach($users as $user){
    if($userLogin == $user["user"] && $passwordLogin == $user["password"]){
        $_SESSION["usuario"] = $userLogin;
        echo "<script>location.href='admin.php';</script>";
    }else{
        echo "<script> alert (\"error en el login\"); </script>";
        echo "<script>location.href='index.php';</script>";
    }
}   



?>