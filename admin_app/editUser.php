<?php
    require('config/config.php');
    require('config/db.php');


    // Check for submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
		$name = mysqli_real_escape_string($connection, $_POST['name']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$balance = mysqli_real_escape_string($connection,$_POST['balance']);

		$query = "UPDATE users SET 
					name='$name',
					email='$email',
					balance='$balance' 
						WHERE id = {$update_id}";

		if(mysqli_query($connection, $query)){
			header('Location: '.HOMEPAGE_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($connection);
		}
	}


    // get ID
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    // Create Query
    $query = 'SELECT * FROM users WHERE id ='.$id;

    // Get Result
    $result = mysqli_query($connection, $query);

    // Fetch Data
    $user = mysqli_fetch_assoc($result);
    // var_dump($users);

    //  Free Result
    mysqli_free_result($result);

    // close connection
    mysqli_close($connection);

?>

<?php include('inc/header.php'); ?>

    <div class="container">
        <div class="text-center">
            <h3 class="mt-5 mb-1">Edit User</h3>
            <a href='<?php echo ROOT_URL; ?>home.php' class="btn btn-outline-secondary mb-5 text-white">< Back</a>

            <h5><?php echo $user['name']; ?></h5>
        </div>

    <!-- Form -->

    

    <div class="col-md-6 mx-auto my-2 p-2 bg-secondary">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
    <div class="form-group">
                    <h6>Username</h6>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required>
                </div>

                <div class="form-group">
                    <h6>Email</h6>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                </div>

                <div class="form-group">
                    <h6>Balance</h6>
                    <input type="text" class="form-control" id="balance" name="balance" value="<?php echo $user['balance']; ?>" required>
                </div>

                <input type="hidden" name="update_id" value="<?php echo $user['id']; ?>" >

                
                <div class="text-center">
                <button type="submit" name="submit" class="btn btn-info px-5">Submit</button>
                </div>

    </form>


    </div>

    </div>


<?php include('inc/footer.php'); ?>