
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_ccls";

$titolo = $_GET["titolo"];
$autore = $_GET["autore"];
$codice = $_GET["codice"];
$descrizione = $_GET["descrizione"];
$anno = $_GET["anno"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO book (titolo, autore, codice, anno, descrizione)
VALUES ('$titolo', '$autore', '$codice', '$anno', '$descrizione')";

if ($conn->query($sql) === TRUE) {
    echo "Libro Inserito";
    header( "refresh:3;url=../index.php" );
    // header("Location: ../index.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>