<?php

    require('config/config.php');
    require('config/db.php');

    
	// Check For Submit
	if(isset($_POST['delete'])){
		// Get form data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

		$query = "DELETE FROM posts WHERE id = {$delete_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //  Create  Query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    //  Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);

    ?>


<?php include('inc/header.php'); ?>


        <div class="container">

        <h2><?php echo $post['title']; ?></h2>    

        
        <p class="lead"><?php echo $post['body']; ?></p>
        <small class="text-secondary">Created on <?php echo $post['created_at']; ?> by: <?php echo $post['author']; ?></small>


            <br>
            <div class="btn-group my-2">

                <a class="btn btn-info" href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>">Edit Post</a>

                <span class="mx-2"></span>

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>

            </div>


            <hr>
            <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">go back</a>        

        </div>

<?php include('inc/footer.php'); ?>