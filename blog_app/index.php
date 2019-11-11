<?php

    require('config/config.php');

    require('config/db.php');

    //  Create  Query
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    //  Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);

    // Free result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);

    ?>


<?php include('inc/header.php'); ?>



        <div class="container">

        <h1 class="text-center my-2">Posts</h1>    

        <?php foreach($posts as $post): ?>

        <div class="card my-2">
            <div class="card-body">
                <h3 class="card-title"><?php echo $post['title']; ?></h3>
                <p class="card-text"><?php echo $post['body']; ?></p>
                <small class='text-secondary'>Created on <?php echo $post['created_at']; ?> by: <?php echo $post['author']; ?></small>
                <br>
                <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
            </div>
        </div>


        <!-- <div class="card m-3">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by: <?php echo $post['author']; ?></small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
        </div> -->

        <?php endforeach; ?>

        </div>



<?php include('inc/footer.php'); ?>