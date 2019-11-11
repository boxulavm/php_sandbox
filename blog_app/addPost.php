<?php

    require('config/config.php');
    require('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // GET form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);


        $query = "INSERT INTO posts(title,author,body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }

    }

    ?>


<?php include('inc/header.php'); ?>



        <div class="container">

        <h1 class="text-center my-2">Add Post</h1>    

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
            <input type="text" name="title" class="form-control" placeholder="Enter Title..." >
            <input type="text" name="author" class="form-control my-2" placeholder="Enter author..." >
            <textarea  rows="6" type="text" name="body" class="form-control" placeholder="Enter body..." ></textarea>
            <input type="submit" name="submit" value="submit" class="btn btn-primary my-1" >
        </form>

        </div>



<?php include('inc/footer.php'); ?>