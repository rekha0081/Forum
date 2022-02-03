<?php
$server="localhost";
$username="root";
$password="";
$database="users";

$conn1=mysqli_connect($server,$username,$password,$database);
if (!$conn1) {
    die("Error".mysqli_connect_error());
}

?>