<?php 

    $mysqli = new mysqli('localhost', 'root', '123123', 'crud') or die(mysqli_error(mysqli));

    $result = $mysqli->query("SELECT * FROM data ORDER BY id ASC") or die($mysqli->error);
  
    // Fetch Data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($users);


    
    session_start();

    $mysqli = new mysqli('localhost', 'root', '123123', 'crud') or die(mysqli_error(mysqli));

    $id = 0;
    $name = '';
    $email = '';
    $update = false;

    // ADD USER TO DB
    if (isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $mysqli->query("INSERT INTO data(name, email) VALUES('$name', '$email')") or die($mysqli->error());

        $_SESSION['message'] = 'User Added!';
        $_SESSION['msg_type'] = 'success';

        header("location: index.php");
    }

    // DELETE USER FROM DB
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];

        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = 'User Deleted!';
        $_SESSION['msg_type'] = 'danger';

        header("location: index.php");
    }

    // CLIK EDIT - FIND USER FROM DB
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;

        $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    

        if($result){
            $user = $result->fetch_array();
            $name = $user['name'];
            $email = $user['email'];
        }

    }

    // UPDATE USER FROM DB
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $mysqli->query("UPDATE data SET name='$name', email='$email' WHERE id=$id ") or die($mysqli->error());

        $_SESSION['message'] = 'User updated!';
        $_SESSION['msg_type'] = 'success';

        header("location: index.php");
    }


    // CANCEL UPDATE
    if (isset($_POST['cancel'])){

        $name = '';
        $email = '';
        $update = false;

        header("location: index.php");
    }    

?>