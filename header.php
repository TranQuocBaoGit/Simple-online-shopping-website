<?php
    session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
            crossorigin="anonymous"></script>
</head>

<body>
    <header style="max-height: 10%;" class="sticky-top">
        <div class="container-fluid bg-dark row">
                <h2 class="col-md-4 p-3 text-white">Shopping Mall</h2>
    
                <nav class="col-md-4 navbar navbar-expand-sm bg-dark navbar-dark rounded-bottom" style="height: 10%;">
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav fs-4">
                            <li><a class="nav-link mx-2" href="index.php?page=home">Home</a></li>
                            <li><a class="nav-link mx-2" href="index.php?page=products">Products</a></li>
                            <li><a class="nav-link mx-2" href="index.php?page=about">About</a></li>
                        </ul>
                    </div>
                </nav>

                    <?php if(isset($_SESSION["userId"])): ?>

                    <div class="col-md-4 container-fluid justify-content-end navbar navbar-expand-sm bg-dark navbar-dark">
                        <ul class="navbar-nav fs-4">
                            <li><a class="nav-link mx-2" href="index.php?page=userSetting">Setting</a></li>
                            <li><a class="nav-link mx-2" href="index.php?page=logout">Logout</a></li>
                        </ul>
                    </div>

                    <?php else: ?>

                    <div class="col-md-4 container-fluid justify-content-end navbar navbar-expand-sm bg-dark navbar-dark">
                        <ul class="navbar-nav fs-4">
                            <li><a class="nav-link mx-2" href="index.php?page=login">Login</a></li>
                            <li><a class="nav-link mx-2" href="index.php?page=register">Register</a></li>
                        </ul>
                    </div>

                    <?php endif; ?>
        </div>

    </header>
    <!-- <form class="d-flex w-100 px-2">
        <input type="search" placeholder= "Search..." class="form-control" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form> -->

    
    


</body>