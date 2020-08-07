<!DOCTYPE html>
<html>
<head>
<title>PROVA</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY7<!--  -->6TfkUoSX" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="../style/prova.css">
</head>
<body background="../img/narrative.jpg">
<h1>  PROVA </h1>
<div class="contenitore">
<div class="prova">
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
</div>
</div>
</body>
</html>