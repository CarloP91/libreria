<?php

require '../db/log.php';

$id = $_GET["id"];
$titolo = $_GET["titolo"];
$autore = $_GET["autore"];
$codice = $_GET["codice"];
$anno = $_GET["anno"];
$desc = $_GET["descrizione"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `u0uq8tmsv20hwgnc`.`book` SET `titolo` = '$titolo', `autore` = '$autore', `codice` = '$codice', `descrizione` = '$desc', `anno` = '$anno'  WHERE (`id` = '$id');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // header( "refresh:0;url=../index.php" );
    // header("Location: ../prenotazione.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>