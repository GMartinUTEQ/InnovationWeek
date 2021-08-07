<?php
session_start();
$_SESSION["ValidaAdmin"] = "NO"; 

    if($_REQUEST["usrpass"] == "LetyVera2021!")
    {
        $_SESSION["ValidaAdmin"] = "SI"; 
        echo "<script>alert('Bienvenido.');window.location.href='DashBoard.php'</script>";
    }
    else
    {
        echo "<script>alert('Contraseña incorrecta.');window.location.href='index.php'</script>";
    }
    

?>