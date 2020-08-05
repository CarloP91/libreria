
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_ccls";

// $titolo = $_GET["titolo"];
// $autore = $_GET["autore"];
// $codice = $_GET["codice"];
// $descrizione = $_GET["descrizione"];
// $anno = $_GET["anno"];
// $id = $_GET["id"]
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM book WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>