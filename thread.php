<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap5/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->

    <title>Welcome to programming Discussion</title>
    <style>
    #ques {
        min.height: 433px;
    }
    </style>

</head>

<body>
<?php include 'partials/_dbconnect.php';?>    
<?php include 'partials/_header.php';?>
    
    <?php
        $id=$_GET['threadid'];
        $sql="SELECT * FROM `threads` WHERE thread_id=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $title=$row['thread_title'];
            $desc=$row['thread_desc'];
            $thread_user_id=$row['thread_user_id'];
            // $thread_user_id=$row['comment_by'];
            // Query the users table to find out the original poster
            $sql2="SELECT username FROM `users` WHERE id='$thread_user_id'";
            $result2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $posted_by=$row2['username'];
        }
    ?>

    <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST')
        {
    
    // insert into comment db
            $comment = $_POST['comment'];
            $comment=str_replace("<" , "&lt;" , $comment);
            $comment=str_replace(">" , "&gt;" , $comment);
            

            $sid=$_POST['id'];

            
            $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sid', current_timestamp())";

            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if($showAlert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your comment has been added.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true>&times;</span>
                            </button>
                    </div>';
            } 
        }
  ?>

<!-- Category Continer -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4 text-center"> <?php echo $title;?> </h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forums.No Spam / Advertising / Self-promote in the forums
                Do not post copyright-infringing material.Do not post “offensive” posts, links or images.Do not cross
                post questions. Do not PM users asking for help.Remain respectful of other members at all times.

            </p>

            <p>
                Posted by <em><?php echo $posted_by; ?></em>
            </p>
        </div>
    </div>

    <?php 
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {
        echo
        '<div class="container">
                <h1 class="py-2">Post a Comment</h1> 
                <form action="'. $_SERVER["REQUEST_URI"] . '" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Type Your Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                        <input type="hidden" name="id" value="' . $_SESSION['id']  . '">
                    </div>
                    <button type="submit" class="btn btn-success">Post Comment</button>
               </form>
        </div>';
    }
    else
     {
        echo '<div class="container">
        <h1 class="py-2">Post Comment</h1> 
        <p class="lead">You are not logged in. Please login to be able to post comment</p>
    </div>';
     }

   ?>
       <div class="container mb-5">
            <h1 class="py-2">Discussions</h1>
        <?php
                $id=$_GET['threadid'];
                $sql="SELECT * FROM `comments` WHERE thread_id=$id";
                $result=mysqli_query($conn,$sql);
                $noResult=true;
                while($row=mysqli_fetch_assoc($result))
                {
                    $noResult=false;
                    $id=$row['comment_id'];
                    $content=$row['comment_content'];
                    $comment_time = $row['comment_time']; 
                    $thread_user_id=$row['comment_by'];
                    $sql2="SELECT username FROM `users` WHERE id='$thread_user_id'";
                    $result2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_assoc($result2);

                    echo '<div class="media my-3">
                            <img src="img/userdefault.png" width="54px" class="mr-3" alt="..." align="left">
                            <div class="media-body">
                                <div class="font-weight-bold my-0"><b>'. $row2['username'] . ' at '. $comment_time. '</b></div> '. $content . '
                            </div>
                        </div>';
                }

                if ($noResult) 
                {
                    echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                    <p class="display-4">No Comments Found</p>
                                    <p class="lead">Be the first person to comment</p>
                            </div>
                        </div>';
                }
        ?>
        
    </div>

    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>