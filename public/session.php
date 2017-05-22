<?php

    session_start();
    if(isset($_SESSION['usu']))
    {
    header("location:cuentaUsuario.php");
    }
    else
    {
        //mensaje no ha iniciado session
        header("location:login.php");
    }
?>