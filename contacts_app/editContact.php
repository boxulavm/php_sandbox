<?php
    require('config/config.php');
    require('config/db.php');

    // Check for submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
		$name = mysqli_real_escape_string($connection, $_POST['name']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$phone = mysqli_real_escape_string($connection,$_POST['phone']);

		$query = "UPDATE contacts SET 
					name='$name',
					email='$email',
					phone='$phone' 
                        WHERE id = {$update_id}";
        
		if(mysqli_query($connection, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($connection);
		}
	}

    // get ID
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    // Create  Query
    $query = 'SELECT * FROM contacts WHERE id = '.$id;

    // Get result
    $result = mysqli_query($connection, $query);

    // Fech Data
    $contact = mysqli_fetch_assoc($result);
    // var_dump($contacts);

    // fREE rESULT
    mysqli_free_result($result);

    // close connection
    mysqli_close($connection);

?>

<?php include('inc/header.php'); ?>

<h1 class="mt-2 mb-4 text-warning text-center"><i class="fas fa-id-card"></i> My Contacts</h1>

    <div class="text-center">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Go Back</a>
    </div>

    <div class="container">
    <div class="row">



    <!-- FORM DIV -->

        <div class="col-md-6">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class='form-group ContactForm p-3 mb-1 mt-5'>
                <h3 class="text-primary mb-3">Edit Contact</h3>
                <input class='form-control' type="text" placeholder="Name" name="name" required value="<?php echo $contact['name']; ?> "  >
                <input class='form-control my-2' type="email" placeholder="Email" name="email" value="<?php echo $contact['email']; ?> "  >
                <input class='form-control' type="text" placeholder="Phone" name="phone" value="<?php echo $contact['phone']; ?> " >
                <input type="hidden" name="update_id" value="<?php echo $contact['id']; ?>" >

                <input type="submit" name="submit" value='Save' class='btn btn-primary btn-block my-4' >
                
            </form>
        </div>



    <!-- CONTACTS DIV -->
    <div class="col-md-6 mt-5">

            <div class="card text-white contact-card mb-3 shadow">
                <div class="card-header">

                <h5 class='text-primary'><?php echo $contact['name']; ?></h5>

                </div>
                <div class="card-body">
                    <h6><i class="fas fa-envelope-open mr-2"></i> <?php echo $contact['email']; ?> </h6>
                    <h6><i class="fas fa-phone mr-2"></i> <?php echo $contact['phone']; ?></h6>
                    <small><i><?php echo $contact['created_at']; ?></i></small>
                <hr/>


                </div>
            </div>

    </div>
    
    </div>
    </div>




<?php include('inc/footer.php'); ?>