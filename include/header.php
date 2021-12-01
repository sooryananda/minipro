
<!---------------------------HEADER------------------------------------->
<!---------------------------------------------------------------------->
<header class="header">
            <img src="images/logo.png" alt="Logo" class="logo-1">
             <nav class="main-nav">
             <ul class="main-nav-list">
                 <li><a class="main-nav-link" href="index.php">Home</a></li>
                 <li><a class="main-nav-link" href="#shop">Shop</a></li>
                 <li><a class="main-nav-link" href="all-items.php">Medicines</a></li>
                 
                 <?php 
                 if(isset($_SESSION["fname"]))
                 {
                  ?>
                 <li><a class="main-nav-link" href="#">Hello <?php
                 echo $_SESSION["fname"]; ?></a></li>
                 <li><a class="main-nav-link" href="orders.php">Orders</a></li>
                 <li><a class="main-nav-link" href="user-logout.php">Logout</a></li>
                 <li><a class="main-nav-link last" href="cart.php"><img class="img-cart" src="images/carts.png"></a></li>
                 <?php
                 } 
                 else{
                    ?>
                     <li><a class="main-nav-link" href="seller-registration.php"> Seller</a></li>
                     <li><a class="main-nav-link" href="login.php">ADMIN</a></li>
                     <li><a class="main-nav-link" href="registration.php"> User</a></li> <?php
                 }
                 ?> 
                 
            </ul>
          
         </nav>
        </header>