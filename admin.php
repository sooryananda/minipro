<?php
    include ('include/database.php');
    session_start();
    if(!isset($_SESSION["AID"]))
    {
        echo "<script>window.open('login.php?mes=access Denied..','_self');</script>";
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
</head>
<body>
        <header class="header">
            <div><img src="images/logo.png" alt="Logo" class="logo-1"></div>
             <nav class="main-nav">
             <ul class="main-nav-list">
                <li><a class="size-nav" href="index.php">Hello admin |</a></li>
                <li><a class="size-nav" href="index.php">Home |</a></li>
                <li><a class="size-nav" href="login.php">Logout</a></li>
             </ul>
          
         </nav>
        </header>
<div class="sidenav">
  <a href="#user">User management</a>
  <a href="#seller">Seller management</a>
  <a href="#stock">Stock Management</a>
  <a href="#orders">Orders</a>
  <a href="#locality">Locality</a>
  <a href="#transaction">Transaction</a>
</div>

<div class="main">
  <h2> Dashboard </h2>

  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>

</div>
<?php include('include/footer.php'); ?>
</body>
</html> 
