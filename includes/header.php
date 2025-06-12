<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="javascript.js"></script>
</head>
<body>
    <header>
        <section class= "headerContainer">
            <div class="headerIcons">
                <img src="Logo.png" alt="logo">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <nav id = "navigation">
                <a href="index.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Home</a>
                <a href="index.php#Locations">Location</a>
                <a href="index.php#Store">Store</a>
                <a href="index.php#About">About</a>
                <a href="cart.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'cart.php') echo 'active'; ?>">Cart</a>
            </nav>
        </section>
    </header>