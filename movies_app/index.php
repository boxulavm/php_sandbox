<?php include 'movies.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Movies APP</title>
</head>
<body class='bg-dark text-light'>
    
    <div class="container my-5">

        <h1 class='text-center mb-2 text-warning'>My Movie List</h1>

        <!-- IF Statement -->
        <?php if($data): ?>
            <ul class="list-group my-1">
                <!-- Loop -->
                <?php foreach($data['movies'] as $movie): ?>
                    <li class="list-group-item text-dark m-1">
                        <h2 class='text-info'><?php echo $movie['Title']; ?> </h2>

                        <h6><i class="fas fa-star text-warning"></i><?php echo $movie['imdbRating']; ?><span class='text-secondary'>/10</span></h6>

                        <small>( <?php echo $movie['Year']; ?> )</small>

                        <span class="badge badge-warning mb-3"><?php echo $movie['Genre']; ?></span>
                        
                        <br>

                        <p class="lead"><?php echo $movie['Plot']; ?></p>

                        <br>
                        <strong class='text-info my-1'>Actors:</strong> <?php echo $movie['Actors']; ?>

                        <br>
                        <strong class='text-info my-1'>Director:</strong> <?php echo $movie['Director']; ?>

                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>


    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>