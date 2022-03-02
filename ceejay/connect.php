<?php

$username = $_POST['username'];
$password = $_POST['password'];

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// collecting data
else{$stmt = $conn->prepare("insert into userlog(username, password) values(?,?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
echo "login successful.....";
$stmt->close();
$conn->close();

}



?>