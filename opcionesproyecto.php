<?php
include("conexion.php");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select idproyecto, nombreproyecto from proyecto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<option value="' . $row["idproyecto"] . '">' . strtoupper($row["nombreproyecto"]) . '</option>
                            ';
  }
} else {

}
$conn->close();
?>