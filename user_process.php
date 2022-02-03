<?php 
    include("dbconnect.php");
    $name=$_REQUEST['name'];
    $subject=$_REQUEST['subject'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];

    // insert data from table
    $query=mysqli_query($db_connect,"INSERT into contact(name,subject,email,message) values ('$name','$subject','$email','$message')") or die(mysqli_error($db_connect));
    mysqli_close($db_connect);
    header("location:index.php?note=success");

?>