<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/solar/bootstrap.min.css" rel="stylesheet" integrity="sha384-8nq3OiMMgrVFAHyRMMO+DTfMEciSY+c3Awhj/5ljQ1xck1Uv2BUtMjsjLD8GT5Er" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    
<?php require_once 'process.php'; ?>

<?php if(isset($_SESSION['message'])): ?>

<div class="container">
<div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);

        ?>
    </div>
</div>

<?php endif; ?>



<div class="container my-5">


<div>
<table class="table table-hover text-white">
  <thead class="bg-primary text-dark">
    <tr>
      <th scope="col">#

        <form action="process.php" method="POST">
        <!-- <button  name="asc" class="btn btn-small btn-outline-dark" >ASC</button> -->
        <button  name="desc" class="btn btn-small btn-outline-dark" >DESC</button>
        </form>

      </th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($users as $user): ?>

    <tr>
      <th scope="row"><?php echo $user['id']; ?></th>
      <td><?php echo $user['name']; ?></td>
      <td><?php echo $user['email']; ?></td>
      <td>
        <a class="btn btn-small btn-outline-info" href="index.php?edit=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-small btn-outline-danger" href="process.php?delete=<?php echo $user['id']; ?>">Delete</a>
      </td>
    </tr>


<?php endforeach; ?>

  </tbody>
</table>
</div>


<br>
<div class="row">
<div class="col-md-6 mx-auto">
    <form action="process.php" method="POST">
        <input hidden name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required >
    </div>
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required >
    </div>

    <?php if($update == true): ?>
        <button type="submit" name="save" class="btn btn-outline-primary px-5">Update</button>
        <button  name="cancel" class="btn btn-outline-danger px-5" >Cancel</button>
    
    <?php else : ?>
        <button type="submit" name="save" class="btn btn-outline-primary px-5">Add new user</button>
    <?php endif; ?>


    </form>
</div>

</div>
</div>


</body>
</html>