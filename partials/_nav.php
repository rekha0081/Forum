
<?php
session_start();
include '_dbconnect.php';

echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="/forum/index.php">pDiscussion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
        <a  class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Top Categories
        </a>
        
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
          $sql="SELECT * FROM `categories` LIMIT 3";
            $result=mysqli_query($conn,$sql);
           
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $cat=$row['name'];

            echo '<li><a class="dropdown-item"  href="threadlist.php?catid= ' . $id . '">' . $cat . '</a></li>';
            
            }
            
        echo'</div>
       

    </ul>
    <div class="row mx-2">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {
        echo ' <form class="d-flex" method="get" action="search.php">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn-outline-success custom-btn-class" type="submit">Search</button>
        
        <p class="text-light my-0 mx-2"><p class="text-dark"> welcome '.$_SESSION['username'].'</p>
        <a href="partials/_logout.php" class="btn btn-outline-success" type="submit">Logout</a>
        </form>';
    }
    else
    {
        echo'
        <div class="mx-2">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">
                Signup
            </button></div>';
    }
    echo'
        
         </div>
         </div>
         </nav>';
?>