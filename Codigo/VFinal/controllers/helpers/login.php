<?php
    if(!empty($_POST['acceder'])){
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        if($nombre =="Admin" && $password == "Admin"){
            header("Location: controllers/DatosCliente.php");
            exit();
        }else{
            echo'<div class="alert alert-warning"> El usuario o contraseña no son validos </div>';
        }
    }
?>

