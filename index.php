<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>Medihome</title>
    </head>
    <body>

<?php
    include('include/header.php'); 
?>
<!---------------------------------->


        <section class="section-hero">
            <div class="HERO">
            <div class="hero-text-box">
                <h1 class="heading-primary">
           <strong>MEDIHOME - Stay safe at home and we bring you Medication</strong></h1>
            <p class="hero-description">
                Sign up fast to order Medicines Now!<br>
                Quick delivery and 24*7 availability!!<br>
                Forget Routine Medical shop trip!!!
            </p>
            <p class="hero-description">
                <div>
                   <br> <a href="registration.php" class="btn"><b>Sign Up</b></a>
                    <a href="#" class="btn">Learn more &darr;</a>
                    </div>
            </p>
            </div>
  
            <div class="hero-image-box">
                <img src="images/6.png" class="hero-img" alt="loading">
            </div>
           
            </div>
        </section>
<!---------------------HEADER ENDS------------------------------------->
<!---------------------MAIN PAGE STARTS-------------------------------->

      <div class="categories">
          <div class="small-container">
              <h2 class="title"><a id="shop">Featured Products</a></h2>
         <form action="manage-cart.php" method="post"> 
              <div class="row">
              <div class="col-3"><a href="productdetails.php"><img src="images/mask.jpg"></a>
             <h4>Surgical Mask</h4><p>Rs 50</p><br><button name="add-to-cart" type="submit" class="btn">Add to Cart</button>
            <input type="hidden" name="item-name" value="mask">
            <input type="hidden" name="price" value="50">
        </div>
        </form>
         <form action="manage-cart.php" method="post">
              <div class="col-3"><img src="images/sanitizer.jpg">
                <h4>Hand sanitizer</h4><p>Rs 30</p><br><button name="add-to-cart" type="submit" class="btn">Add to Cart</button>
            <input type="hidden" name="item-name" value="sanitiser">
            <input type="hidden" name="price" value="30">
         </div>
        </form>
         <form action="manage-cart.php" method="post">
              <div class="col-3"><img src="images/face.jpg">
                <h4>Face shield</h4><p>Rs 40</p><br><button name="add-to-cart" type="submit" class="btn">Add to Cart</button>
            <input type="hidden" name="item-name" value="face-mask">
            <input type="hidden" name="price" value="40">
         </div>
          </form>
         </div>
        </div>

      <div class="small-container">
          <div class="row">
              <div class="col-4"><img src="images/paste.jpg"><h4>Toothpaste</h4><p>Rs 35</p><br><a class="btn" href="manage-cart.php">Add to Cart</a></div>
              <div class="col-4"><img src="images/brush.jpg"><h4>Toothbrush</h4><p>Rs 50</p><br><a class="btn" href="manage-cart.php">Add to Cart</a></div>
              <div class="col-4"><img src="images/soap.jpg"><h4>Soap</h4><p>Rs 50</p><br><a class="btn" href="manage-cart.php">Add to Cart</a></div>
              <div class="col-4"><img src="images/shampoo.jpg"><h4>Shampoo</h4><p>Rs 50</p><br><a class="btn" href="manage-cart.php">Add to Cart</a></div>
          </div>
      </div>

      <div class="small-container">
        <div class="row">
            <div class="col-4"><img src="images/ensure.jpg"><h4>Ensure</h4><p>Rs 50</p><br><a class="btn" href="#">Add to Cart</a></div>
            <div class="col-4"><img src="images/vicksvapor.jpg"><h4>Vicks vaporub</h4><p>Rs 50</p><br><a class="btn" href="#">Add to Cart</a></div>
            <div class="col-4"><img src="images/pampers.jpg"><h4>Pampers</h4><p>Rs 50</p><br><a class="btn" href="#">Add to Cart</a></div>
            <div class="col-4"><img src="images/pads.jpg"><h4>Santitary pads</h4><p>Rs 50</p><br><a class="btn" href="#">Add to Cart</a></div>
        </div>
    </div>
    <br><br><br>
<!---------------------MAIN PAGE ENDS------------------------------------->
<!---------------------HOME DELIVERY STARTS------------------------------->

    <div class="offer">
        <div class="small-contain">
            <div class="row">
                <div class="col-2"><img src="images/home.png" class="offer-image"></div>
                <div class="col-2"><p>Exclusively available in Medihome</p>
                <br><br><h1>Home Delivery</h1><br>
                <small>Medihome ensures safe delivery of your medicines at your doorstep
                    instantly.So what are you waiting for? Choose your locality and forget it!
                    We got You.</small>
                </div>
        </div>
    </div>
<!--------------------------HOME DELIVERY ENDS------------------------->
<!--------------------------FOOTER STARTS------------------------------>
<?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>
    
      
      
