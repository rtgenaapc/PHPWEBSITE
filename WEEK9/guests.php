<?php
$servername = "localhost";
$username = "rtgena";
$password = "rtgena";
$dbname = "Website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Lastname, email, website, comment FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Lastname"]. "  - Email: " . $row["email"]. "  - Website: " . $row["website"]. "  - Comment: " . $row["comment"]."<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>