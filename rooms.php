<?php include('./bladeConfig.php');
echo $blade->run("rooms");

include("database.php");
$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " ;
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>