<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <style>

        .showcase{
            background: url('https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
            background-repeat: no-repeat;
            background-position: 50% 40%;
            background-size: cover;
            height: 200px;
            -moz-background-size: cover;
            -webkit-background-size: cover;
        }

        .showcase-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            height: 200px;
        }

        .footer {
            margin-top: 100px;
        }

        </style>

        <title>PHP Blog</title>
    </head>
    <body>

    <div class="mb-5">
        <?php include('navbar.php'); ?>
        <?php include('showcase.php'); ?>
    </div>