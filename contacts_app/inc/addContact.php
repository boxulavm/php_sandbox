<?php

    require('config/db.php');


    // Check for submit
    if(isset($_POST['submit'])){
        // GET form data
        echo 'Submited';
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);


        $query = "INSERT INTO contacts(name,email,phone) VALUES('$name', '$email', '$phone')";

        if(mysqli_query($connection, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($connection);
        }

    }

    ?>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Add New Contact </h5>
            <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class='form-group ContactForm p-1 mb-1 mt-1'>
            <input class='form-control' type="text" placeholder="Name" name="name" required   >
            <input class='form-control my-2' type="email" placeholder="Email" name="email" required  >
            <input class='form-control' type="text" placeholder="Phone" name="phone" required >

            <div>
                <input type="submit" name="submit" value='Save' class='btn btn-primary btn-block my-4' >
            </div>

        </form>

        </div>
        </div>
    </div>
    </div>