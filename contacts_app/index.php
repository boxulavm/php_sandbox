<?php
    require('config/config.php');
    require('config/db.php');

    	// Check For Submit
        if(isset($_POST['delete'])){
            // Get form data
            $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

            $query = "DELETE FROM contacts WHERE id = {$delete_id}";

            if(mysqli_query($connection, $query)){
                header('Location: '.ROOT_URL.'');
            } else {
                echo 'ERROR: '. mysqli_error($connection);
            }
        }

    // Create  Query
    $query = 'SELECT * FROM contacts ORDER BY name ASC';

    // Get result
    $result = mysqli_query($connection, $query);

    // Fetch Data
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($contacts);

    // fREE rESULT
    mysqli_free_result($result);

    // close connection
    mysqli_close($connection);

?>

<?php include('inc/header.php'); ?>
<?php include('inc/addContact.php'); ?>

    <div class="container">
    <h1 class="mt-2 mb-4 text-warning text-center"><i class="fas fa-id-card"></i> My Contacts</h1>

    <!-- Button trigger modal -->

    <div class="text-center">
        <button type="button" class="btn btn-primary px-5" data-toggle="modal" data-target="#exampleModalCenter">
            Add New Contact
        </button>
    </div>


    <div class="row">

    <!-- CONTACTS DIV -->
    <div class="col-md-6 mx-auto mt-5">

        <?php foreach($contacts as $contact) : ?>
            <div class="card text-white contact-card mb-3 shadow">
                <div class="card-header">

                <h5 class='text-primary'><?php echo $contact['name']; ?></h5>

                </div>
                <div class="card-body">
                    <h6><i class="fas fa-envelope-open mr-2"></i> <?php echo $contact['email']; ?> </h6>
                    <h6><i class="fas fa-phone mr-2"></i> <?php echo $contact['phone']; ?></h6>
                    <small><i><?php echo $contact['created_at']; ?></i></small>
                <hr/>

                <div class="row">

                    <a href="<?php echo ROOT_URL; ?>editContact.php?id=<?php echo $contact['id']; ?>" class="btn btn-primary mr-2" >Edit</a>
                        
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="delete_id" value="<?php echo $contact['id']; ?>">
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    </form>

                </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    
    </div>
    </div>


<?php include('inc/footer.php'); ?>