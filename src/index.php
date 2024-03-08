<?php
$servername = "mysql";
$username = "root";
$password = "secret";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<br>
<?php
echo "ini belajar pertamaku";
<br>
echo "ini asik sekali";
<br>
echo "ini otomatis loh";
<br>
?>