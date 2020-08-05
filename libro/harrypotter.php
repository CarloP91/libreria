<?php
require '../db/log.php';

// $src_arrive = $_GET[""];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book WHERE titolo = 'Harry Potter'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
		echo  $row["titolo"] ."<br>"
		.$row["autore"] ."<br>"
		.$row["codice"] ."<br>"
		.$row["anno"] ."<br>"
		.$row["descrizione"] ."<br>";

	}
} else {
	echo "0 results";
}
$conn->close();
?>