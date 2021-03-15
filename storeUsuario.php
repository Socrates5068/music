<?php
    include('conexion.php');
    if(!empty($_POST["user"])){
        $user = $_POST["user"];
        $ci = $_POST["ci"];
        $password = $_POST["password"];
        

        $query = "INSERT INTO users VALUES(NULL,'$user','$ci','$password')";

        mysqli_query($conexion, $query) or die("error al insertar usuario".mysqli_error($conexion));

        echo "<script> alert (\"Usuario Registrado\"); </script>";
        echo "<script>location.href='index.php';</script>";

    }else{
        echo "error no hay datos";
    }
?>