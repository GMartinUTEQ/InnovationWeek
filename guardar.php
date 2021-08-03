<?php

//var_dump($_POST);
foreach($_POST as $key => $value) {
    include("conexion.php");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $idevento = 1;
    $idproyecto = $_REQUEST["Proyecto"];
    $nombreEvaluador = $_REQUEST["nombreEvaluador"];
    $correoEvaluador = $_REQUEST["correoEvaluador"];

    if(strpos($key, "kres", 0) > 0)
    {
        /*echo "Check " . $key . " - " . $value . "<br/>";
        insert into respuesta (idevento, idproyecto, idpregunta, idrespuesta, valor, nombreevaluador, correoevaluador) values (1, 1, 1, 1, 1, '', '');*/
        
        $preguntarespuesta = str_replace("chkres", "", $key);
        //echo $preguntarespuesta;
        $pregunta = substr($preguntarespuesta,0, 1);
        //echo " - " . $pregunta;
        $respuesta = substr($preguntarespuesta,2, 1);
        //echo " - " . $respuesta;
        $sql = "insert into respuesta (idevento, idproyecto, idpregunta, idrespuesta, valor, nombreevaluador, correoevaluador) values ($idevento, $idproyecto, $pregunta, $respuesta, 1, '$nombreEvaluador', '$correoEvaluador');";
        //echo " - " . $sql;

        if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        } else {
        //echo " - Error: " . $sql . "<br>" . $conn->error;
        }

        
        
        //echo "<br/>";

    }
    else
    {
        //echo $key . " - " . $value . "<br/>";
    }
    $conn->close();
    echo "<script>alert('Gracias por su evaluación');window.location='Dashboard∑.php';</script>";
}

?>