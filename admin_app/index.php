<?php
    require('config/config.php');
    require('config/db.php');

    // Create Query
    $query = 'SELECT * FROM admin_info';

    // Get Result
    $result = mysqli_query($connection, $query);

    // Fetch Data
    $admins_info = mysqli_fetch_assoc($result);
    // var_dump($admins_info['username']);

    //  Free Result
    mysqli_free_result($result);

    // close connection
    mysqli_close($connection);

    
    $admins_username = $admins_info['username'];
    $admins_password = $admins_info['password'];

            // Check for submit
            if(isset($_POST['submit'])){
                // GET form data
                $username = ($_POST['username']);
                $password = ($_POST['password']);
        
        
        
                if( $username == $admins_username && $password == $admins_password){
                    header('Location: '.HOMEPAGE_URL.'');
                } else {
                    echo("
                        <h4 class='text-danger text-center my-1'>Failed to login</h4>
                        ");
                }
        
            }

?>

<?php include('inc/header.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                <div class="form-group">
                    <h4>Username</h4>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <h4>Password</h4>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <div class="text-center">
                <button type="submit" name="submit" class="btn btn-info px-5">Submit</button>
                </div>

            </form>

            </div>
        </div>
    </div>

<?php include('inc/footer.php'); ?>