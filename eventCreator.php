<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ninjoindb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO events (id,eventName,location,currentNumNinjas,minNinjasForSuccess,maxNinjas,details) VALUES (5,'test','sere',3,4,5,'sd')";


if($conn->query($sql) == TRUE) {
    echo "inserted successfully";
} else {
    echo "Error inserting stuffs: " . $conn->error;
}


$conn->close();

?>
</html>
