<?php
session_start();
// GET THE BASENAME
$title = basename($_SERVER["PHP_SELF"]);

// COMPARE AND SET APPROPRIATE TITLE
switch ($title) {
    case 'login.php';
        $title = 'B.C. Store | Login';
        break;
    case 'signup.php';
        $title = 'B.C. Store | Signup';
        break;
    case 'index.php';
        $title = 'B.C. Store | Home';
        break;
    case 'favourites.php';
        $title = 'B.C. Store | Favourites';
        break;
    case 'product.php';
        $title = 'B.C. Store | Product';
        break;
    case 'shop.php';
        $title = 'B.C. Store | Collection';
        break;
    case 'contact.php';
        $title = 'B.C. Store | Contact';
        break;
    case 'about.php';
        $title = 'B.C. Store | About';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Dipesh B.C." />
    <title><?php echo $title; ?></title>

    <!-- EXTERNAL STYLESHEET -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- JQUERY -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- ICON PACK -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet" />

    <!-- TWEENMAX (GREENSHOCK) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <!-- FOR ON SCROLL ANIMATIONS -->
    <link rel="stylesheet" href="./assets/css/animate.css" />
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/functions.js"></script>
</head>

<body>