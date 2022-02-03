<?php 
   include("dbconnect.php") ;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to programming Discussion</title>
    <style>
      .container{
        min-height:85vh;
      }

    </style>
  </head>
  <body>
  
     <?php include 'partials/_header.php';?>
     <div class="container my-3">
       <h1 class="text-center">Contact Us</h1>
       <form action="user_process.php" method="post" name="user">
     <!-- <form class="contact-form" action="contact.php" method="post" > -->
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button class="btn btn-outline-success" type="submit" name="submit">
    Submit
  </button>
</form>
<br><br>

 </div>
 
        
     <?php include 'partials/_footer.php';?>
     


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>