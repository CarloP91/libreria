<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcinema";

$order= "nome"; 
$visual= "ASC"; 

// $titolo = $GET_["titolo_srh"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `book`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>



   <?php 


   $row["titolo"];

   echo $row["titolo"];





   ?>



<br><br>

<?php 

}
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<hr>




