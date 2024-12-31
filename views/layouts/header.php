<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Mise en situation</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">My App</a>
        
        <!-- Navigation Links -->
        <ul class="navbar-nav ml-auto">
           
            <li class="nav-item"><a class="nav-link" href="../auth/login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="../auth/register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="../auth/logout.php">Logout</a></li>
           
            <!-- Check if the user is authenticated -->
            <?php
            // Replace the following condition with your authentication check logic
            //$isAuthenticated = false;

           // if ($isAuthenticated) {
                // Display Logout link if authenticated
               // echo '<li class="nav-item"><a class="nav-link" href="#">Logout</a></li>';
            //} else {
                // Display Login and Register links if not authenticated
                //echo '<li class="nav-item"><a class="nav-link" href="#">Login</a></li>';
                //echo '<li class="nav-item"><a class="nav-link" href="#">Register</a></li>';
           // }
            ?>
        </ul>
    </nav>

    <div class="container mt-4">
