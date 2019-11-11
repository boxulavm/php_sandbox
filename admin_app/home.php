<?php
    require('config/config.php');
    require('config/db.php');

    // Create Query

    $query = 'SELECT * FROM users';

    // Get Result
    $result = mysqli_query($connection, $query);

    // Fetch Data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($users);

    //  Free Result
    mysqli_free_result($result);

            // Check for submit
            if(isset($_POST['submit'])){
                // GET form data
                $name = mysqli_real_escape_string($connection, $_POST['name']);
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $balance = mysqli_real_escape_string($connection, $_POST['balance']);
        
        
                $query2 = "INSERT INTO users(name,email,balance) VALUES('$name', '$email', '$balance')";
        
                if(mysqli_query($connection, $query2)){
                    header('Location: '.HOMEPAGE_URL.'');
                } else {
                    echo 'ERROR: '.mysqli_error($connection);
                }
        
            }

            	// DELETE Submit
                if(isset($_POST['delete'])){
                    // Get form data
                    $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

                    $query = "DELETE FROM users WHERE id = {$delete_id}";

                    if(mysqli_query($connection, $query)){
                        header('Location: '.HOMEPAGE_URL.'');
                    } else {
                        echo 'ERROR: '. mysqli_error($connection);
                    }
                }


    // close connection
    mysqli_close($connection);    

?>

<?php include('inc/header.php'); ?>

    <div class="container">

    <!-- Form -->

    <h3 class="my-4 text-center">Add New User</h3>

    <div class="col-md-6 mx-auto my-2 p-2 bg-secondary">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
    <div class="form-group">
                    <h6>Username</h6>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <h6>Email</h6>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <h6>Balance</h6>
                    <input type="text" class="form-control" id="balance" name="balance" required>
                </div>

                
                <div class="text-center">
                <button type="submit" name="submit" class="btn btn-info px-5">Submit</button>
                </div>

    </form>


    </div>



        <!-- Users List -->
        <h3 class="my-5">Users</h3>

        <table class="table table-hover text-white">

            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Balance 
                </th>
                <th scope="col">Edit/Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $user) : ?>

                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['balance']; ?><span class="text-success"> $</span></td>
                    <td> 
                        <div class="row">
                        
                        <a href="<?php echo ROOT_URL; ?>editUser.php?id=<?php echo $user['id']; ?>" class="btn btn-outline-warning"><i class='fa fa-pen'></i></a> 
                        
                        <!-- DELETING -->
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="delete_id" value="<?php echo $user['id']; ?>">
                        <button type="submit" name="delete"  class="btn btn-outline-danger ml-1"><i class="fa fa-trash-alt"></i></button>
                        </form>

                        </div>

                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>

        </table>

    </div>

<?php include('inc/footer.php'); ?>