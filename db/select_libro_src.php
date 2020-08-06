
<?php

require 'log.php';


//  $src_arrive = "Harry Potter";

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

		$string = str_replace(' ', '', $row["titolo"]);
		$string = strtolower($string);
	
		echo 
		'<li><a href="libro/libro.php?titolo=' .$row["titolo"] .'">' .$row["titolo"] .'</a></li> ';
		
	}
} else {
	echo "Nessun Risultato" 
	."<br>"
	.'<a href="../libro/inserisci_libro.php">VUOI INSERIRE UN NUOVO LIBRO?</a>';
}
$conn->close();
?>