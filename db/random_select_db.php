<?php

require 'log.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book ORDER BY RAND() LIMIT 3";
$result = $conn->query($sql);

echo "<b>Alcuni dei nostri libri: </b>|";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["titolo"] ." | ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>