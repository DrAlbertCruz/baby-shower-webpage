<!doctype html>
<?php
session_start();
if( !isset( $_SESSION['logged'] ) ) {
    header( 'Location: index.php' );
}
if( $_SESSION['logged'] != 1 ) {
    header( 'Location: index.php' );
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
    <div class="accContent container mx-auto">
        <div class="row">
        <div class="col-sm text-center my-auto">
            <h1>Cruz Baby Shower Program</h1>
            <img class="babyLogo" src="images/baby-brewing-2.gif">
            <p>We are so excited to meet Baby Cruz and to celebrate his upcoming arrival with you. Due to COVID concerns, we are hosting the event entirely online. It is regrettable that we cannot see everyone in person and feel that this is the safest choice to protect baby Cruz. We still want to share our experience with friends and family.</p>
            <p>The shower will use the Zoom app to host the event. Zoom is a video conferencing app that lets you see and talk with others. It will work on your laptop, phone, or tablet. To join a session, use the links provided on our website.</p>
            <p>The main event is on Saturday February 20 at 3:00PM (PST). We will play games, mingle and open presents live that arrive by the date of the event. We are also hosting breakout sessions for family and friends for a chance to talk to us in smaller groups throughout the weekend. </p>
        </div>
        <div class="col-sm text-center my-auto">
            <h3 class="accFancyForm">Friday February 19</h3>
            <p>7:00PM - 9:00PM (PST)<br>Virtual Cocktail Reception<br><em>For friends. Fun, drinks and games. BYOB.</em><br><a href="https://csub.zoom.us/j/85994431461?pwd=ZVpqc2NEUUlEcWZHNXVqc3phL2VXZz09">https://csub.zoom.us/j/85994431461?pwd=ZVpqc2NEUUlEcWZHNXVqc3phL2VXZz09</a></p>
        </div>
    </div>
</div>

<?php
echo '<pre>';
echo session_id();
var_dump( $_SESSION );
echo '</pre>';
?>

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
