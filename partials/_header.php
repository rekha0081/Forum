<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    
    <script src="bootstrap5/js/bootstrap.min.js"></script>

    


<!-- Menu -->

<?php
include '_dbconnect.php';
include 'partials/_nav.php';

 include 'partials/_loginModal.php';
 include 'partials/_signupModal.php';
 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success!</strong> You can now login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
 }
?>