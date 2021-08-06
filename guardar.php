<?php

foreach($_POST as $key => $value) {
    include("conexion.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $idevento = 1;
    $idproyecto = $_REQUEST["Proyecto"];
    $nombreEvaluador = $_REQUEST["nombreEvaluador"];
    $correoEvaluador = $_REQUEST["correoEvaluador"];

    if(strpos($key, "kres", 0) > 0)
    {
        
        $preguntarespuesta = str_replace("chkres", "", $key);
        $pregunta = substr($preguntarespuesta,0, 1);
        $respuesta = substr($preguntarespuesta,2, 1);
        $sql = "insert into respuesta (idevento, idproyecto, idpregunta, idrespuesta, valor, nombreevaluador, correoevaluador) values ($idevento, $idproyecto, $pregunta, $respuesta, 1, '$nombreEvaluador', '$correoEvaluador');";

        if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        } else {
        //echo " - Error: " . $sql . "<br>" . $conn->error;
        }

    }
    $conn->close();
    echo "<script>alert('Gracias por su evaluación');window.location='Dashboard∑.php';</script>";
}

?>