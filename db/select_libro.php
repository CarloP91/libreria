<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_ccls";

 $src_arrive = $_GET["search"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book WHERE titolo = '$src_arrive'";
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
	echo "Nessun Risultato" 
	."<br>"
	.'<a href="../libro/inserisci_libro.php">VUOI INSERIRE UN NUOVO LIBRO?</a>';
}
$conn->close();
?>