<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php
require '../db/log.php';
$src_arrive = $_GET["titolo"];
// echo $src_arrive;
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
		echo "<b>Titolo: </b>" .$row["titolo"] ."<br>"
		."<b>Autore: </b>" .$row["autore"] ."<br>"
		."<b>Codice Prodotto: </b>".$row["codice"] ."<br>"
		."<b>Anno: </b>".$row["anno"] ."<br>"
		."<b>Descrizione: </b>".$row["descrizione"] ."<br>";

		echo '<a href="../db/delete_db.php?id='.$row["id"].'">Cancella Libro</a>';
		
	}
} else {
	echo "Nessun Risultato" 
	."<br>"
	.'<a href="../libro/inserisci_libro.php">VUOI INSERIRE UN NUOVO LIBRO?</a>';
}
$conn->close();
?>

</body>
</html>





