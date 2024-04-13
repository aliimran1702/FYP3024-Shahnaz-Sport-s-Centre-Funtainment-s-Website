<?php
$servername="localhost";
$username="root";
$password="";
$dbName="shahnaz sport center";

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql = "SELECT username, password FROM admin WHERE username='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    header("location:adminMenu.php");
}
else
{
    echo "<p>Wrong Username or Password. Please try again.";
}

$conn->close();
?>