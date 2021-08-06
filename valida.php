<?php
session_start();
$_SESSION["Validado"] = "NO"; 
include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from evento where now() >= fechainicio and now() <= fechafin;";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  $contador = 1;
  $divActual = "";
  while($row = $result->fetch_assoc()) 
  {
    
    if(md5($_REQUEST["usrpass"]) == $row["contrasena"])
    {
        $_SESSION["Validado"] = "SI"; 
        echo "<script>alert('Bienvenido.');window.location.href='Dashboard.php'</script>";
    }
    else
    {
        echo "<script>alert('Contraseña incorrecta.');window.location.href='index.php'</script>";
    }
    
  }
}
else
{
    
    $sql = "select * from evento where fechainicio >= now()";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        echo '
        
            <style>
            .container { 
                height: 700px;
                position: relative;
              }
              
              .center {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
              }
            </style>
            
            <div class="container">
                <div class="center" style="text-align:center">
                <img style="max-height:200px" src="assets/img/Logo_uteq.png">
                    <h1>Bienvenido, comenzamos en breve</h1>
                    <p id="demo" style="color:black"></p>
                </div>
            </div>
            <script>
        
            var countDownDate = new Date("' . $row["fechainicio"] . '").getTime();

            
            var x = setInterval(function() {

            
            var now = new Date().getTime();

            
            var distance = countDownDate - now;

            
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            
            document.getElementById("demo").innerHTML = "<h1>" +  days + " Días " + hours + " Horas " 
            + minutes + " Minutos " + seconds + " Segundos </h1>";

            
            if (distance < 0) {
                clearInterval(x);
                window.location.href="index.php";
                //document.getElementById("demo").innerHTML = "EXPIRED";
            }
            }, 1000);
            </script>
        ';
        }
    }

}


$conn->close();
?>