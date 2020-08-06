<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style/style.css"> -->
	
	

</font>
</head>
<body background="../img/narrative.jpg">
<font face="Verdana" size="5" color="black" >
</body>
</html>


<?php
require "../db/log.php";

// $src_arrive = $_GET[""];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book";
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