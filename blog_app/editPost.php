<?php

    require('config/config.php');
    require('config/db.php');

    // Check for submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);

		$query = "UPDATE posts SET 
					title='$title',
					author='$author',
					body='$body' 
						WHERE id = {$update_id}";

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

        <h1 class="text-center my-2">Edit Post</h1>    

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="title" class="form-control" placeholder="Enter Title..." value="<?php echo $post['title']; ?>" >
            <input type="text" name="author" class="form-control my-2" placeholder="Enter author..." value="<?php echo $post['author']; ?>" >
            <textarea rows="6" type="text" name="body" class="form-control" placeholder="Enter body..." ><?php echo $post['body']; ?></textarea>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>" >
            <input type="submit" name="submit" value="submit" class="btn btn-primary my-1" >
        </form>

        </div>



<?php include('inc/footer.php'); ?>