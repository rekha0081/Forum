<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if (password_verify($password, $row['password']))
            { 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $username;
                echo "logged in".$username;
                header("Location: /forum/index.php");
                exit();
            } 
            header("Location: /forum/index.php");
        }
        
    } 
    header("Location: /forum/index.php");
}
    
?>
