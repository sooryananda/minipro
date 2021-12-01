<?php
    include ('include/database.php');
    session_start();
    if(!isset($_SESSION['SID']))
    {
        echo "<script>window.open('seller-registration.php?mes=access Denied..','_self');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/adminstyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <title>Seller | Panel</title>
</head>
<body>
        <header class="header">
            <div><img src="images/logo.png" alt="Logo" class="logo-1"></div>
             <nav class="main-nav">
             <ul class="main-nav-list">
                <li class="size-nav">Hello Seller |</li>
                <li><a class="size-nav" href="seller.php">Home |</a></li>
                <li><a class="size-nav" href="seller-logout.php">Logout</a></li>
             </ul>
          
         </nav>
        </header>


        <?php include ('include/seller-sidenav.php'); ?>



</body>
</html> 