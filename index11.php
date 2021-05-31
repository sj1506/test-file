<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
<?php
$servername = "db";
$username = "root";
$password = "intelli";
$dbname = "TEST";
$name=$_POST["name"];
$subject=$_POST["subject"];
$email=$_POST["email"];
$message=$_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['message'])){
$sql = "INSERT INTO details (name,subject,email,message)
VALUES ('".$firstname."', '".$subject."','".$email."','".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</center>
</body>

</html>
