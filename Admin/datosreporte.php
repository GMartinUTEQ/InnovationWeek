<?php
include("../conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select respuesta.idproyecto, proyecto.nombreproyecto,proyecto.nombreasesor, proyecto.division,  sum(respuesta.valor) as puntos from respuesta inner join proyecto on proyecto.idproyecto = respuesta.idproyecto where respuesta.idevento = 1 group by division, idproyecto order by 4 asc, 5 desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $contador = 1;
  $divActual = "";
  while($row = $result->fetch_assoc()) {
    
    if($divActual != $row["division"])
    {
      
      $divActual = $row["division"];
      $contador = 1;
      echo "<tr><td colspan='5' class='text-center'><h4>" . utf8_encode($row["division"]) . "</h4></td></tr>";
    }
    if($contador == 1)
    {
        echo '<tr>
        <th scope="row">' . $contador . ' <img style="max-height:50px" style="margin-left:50px" src="../assets/img/1st.png"></th>
        <td>'. utf8_encode($row["nombreproyecto"]) . '</td>
        <td>'. utf8_encode($row["nombreasesor"]) . '</td>
        <td>'. utf8_encode($row["division"]) . '</td>
        <td>'. utf8_encode($row["puntos"]) . '</td>
        </tr>';
    }
    elseif($contador == 2)
    {
        echo '<tr>
        <th scope="row">' . $contador . ' <img style="max-height:50px" style="margin-left:50px" src="../assets/img/2nd.png"></th>
        <td>'. utf8_encode($row["nombreproyecto"]) . '</td>
        <td>'. utf8_encode($row["nombreasesor"]) . '</td>
        <td>'. utf8_encode($row["division"]) . '</td>
        <td>'. utf8_encode($row["puntos"]) . '</td>
        </tr>';
    }
    elseif($contador == 3){
    echo '<tr>
    <th scope="row">' . $contador . ' <img style="max-height:50px" style="margin-left:50px" src="../assets/img/3rd.png"></th>
    <td>'. utf8_encode($row["nombreproyecto"]) . '</td>
    <td>'. utf8_encode($row["nombreasesor"]) . '</td>
    <td>'. utf8_encode($row["division"]) . '</td>
    <td>'. utf8_encode($row["puntos"]) . '</td>
    </tr>';
    }
    if($contador >= 4)
    {
        echo '<tr>
        <td scope="row">' . $contador . ' </td>
        <td>'. utf8_encode($row["nombreproyecto"]) . '</td>
        <td>'. utf8_encode($row["nombreasesor"]) . '</td>
        <td>'. utf8_encode($row["division"]) . '</td>
        <td>'. utf8_encode($row["puntos"]) . '</td>
        </tr>';
    }

    $contador++;
  }
} 


$conn->close();
?>