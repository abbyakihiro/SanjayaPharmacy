<?php
$name = filter_input(INPUT_POST, 'Name');
$email = filter_input(INPUT_POST,'Email2');
$username = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'password');
$gender = filter_input(INPUT_POST, 'gender');
$birthday = filter_input(INPUT_POST, 'birthday');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "uasmember";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO datamember (Name,Email,Username,Password,Gender,DOB) 
VALUES ('$name','$email', '$username', '$password', '$gender', '$birthday')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
$conn->close();
header( 'Location: insert.html' ) ;
}
else{
echo "Error: ". $sql ." ". $conn->error;
}
$conn->close();
}
?>