<?php
session_start();

include(__DIR__."/login/function.php");
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="/css/login.css">
    <title>Whiteboard Forum-Register</title>
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-light d-flex justify-content-between">
        <a class="navbar-brand d-flex flex-rows align-items-center" href="/">
            <img src="/images/icon.png" width="50" height="50" class="d-inline-block align-center p-2" alt="">
            <div style="font-weight: 500">Whiteboard Forum</div>
        </a>
    </nav>

    <!-- form -->
    <div class="h-75 d-flex align-items-center justify-content-center">
        <form class="d-flex flex-column align-items-center" action="../login/validation.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal text-center">Register your account</h1>
            <label for="email" class="sr-only">Email address</label>
            <input name="email" type="email" id="email" class="form-control mb-1" placeholder="Email address" required autofocus>

            <label for="username" class="sr-only">Username</label>
            <input name="username" type="username" id="username" class="form-control mb-1" placeholder="Username" required>

            <label for="password" class="sr-only">Password</label>
            <input name="password" type="password" id="password" class="form-control mb-1" placeholder="Password" required>

            <button class="btn btn-lg btn-primary m-2" type="submit" name="submit">Register</button>
        </form>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>
