<!doctype html>
<?php
session_start();
// Uses session variable to make sure user is logged in properly
if( !isset($_SESSION['logged']) ) {
    // User header to force user to index to log in if this variable isn't set
    header("Location: index.php");
}
// Session variable logged must be a particular value
if( $_SESSION['logged'] != 1 ) {
    header("Location: index.php");
}
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" 
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Bootstrap CSS --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
            crossorigin="anonymous">
        <!-- My CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Seaweed+Script&family=Special+Elite&display=swap" 
            rel="stylesheet">
        <title>A Baby Boy is Brewing!</title>
    </head>
<body>
    <div class="accContent container mx-auto w-50">
        <div class="row">
            <div class="col-sm text-center my-auto">
            <img class="babyLogo" src="images/baby-brewing-2.gif">
        </div>
        <div class="col-sm text-center my-auto">
            <h1>Test Schedule</h1>
            <p>test schedule to check if the user has logged in.</p>
        </div>
    </div>
</div>
</body>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
    crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>

<!-- My JS last -->
<script type="text/javascript" src="js/main.js"></script>
</html>
