<?php
$company_name = $_POST['company_name'];
$cin = $_POST['cin'];
$number_of_branches = $_POST['number_of_branches'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'gurucdmp';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO registered_users (company_name, cin, number_of_branches)
VALUES ('$company_name', '$cin', '$number_of_branches')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>