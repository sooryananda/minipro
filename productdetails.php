<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style2.css" /> 
        <link rel="stylesheet" href="css/style.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>Medihome</title>
    </head>
    <body>
<!---------------------------HEADER and navigation------------------------------------->
<header class="header">
            <img src="images/logo.png" alt="Logo" class="logo-1">
             <nav class="main-nav">
             <ul class="main-nav-list">
                 <li><a class="main-nav-link" href="index.php">Home</a></li>
                 <li><a class="main-nav-link" href="#shop">Shop</a></li>
                 <li><a class="main-nav-link" href="categories.html">Categories</a></li>
                 <li><a class="main-nav-link" href="#">Track Order</a></li>
                 <li><a class="main-nav-link last" href="registration.php">Account</a></li>
                 <li><a class="main-nav-link last" href="login.php">ADMIN</a></li>
                 <li><a class="main-nav-link last" href="#"><img class="img-cart" src="images/carts.png"></a></li>
            </ul>
          
         </nav>
        </header>
<!---------------------------------------------------------------------->
<div class="small-container">
    <div class="row">
        <div class="col-2"><img style="width: 90%;" src="images/mask.jpg"></div>
        <div class="col-2">
            <h1>Surgical Mask</h1>
            <p>Rs 50</p><br>
            <select>
                <option>Select Quantity</option>
                <option>10</option>
                <option>30</option>
                <option>50</option>
            </select><br><br>
            <a class="btn" href="#">Add to Cart</a>
            <a class="btn" href="#">Buy Now</a><br><br><br>
            <h3>Product Details</h3><br>
              <p>
                Care Instructions :	Non Washable <br>
                Size	: Free Size (Pack of 50) <br>
                Style	: Outer Earloop Mask<br>
                Brand	: QUARANT<br>
                Colour	: Blue</p><br>
                <h3>About This Item</h3><br>
                <ul>
                    <li>Care Instructions: Non Washable</li>
                    <li>Fit Type: Snug Fit</li>
                    <li>BFE >98% & PFE >95%: Our masks offers a higher Bacteria Filtration Efficiency of 
                        >98% @ 3.0 microns and Particulate Filtration Efficiency of >95% @ 0.3 microns.</li>
                    <li>Free-Size & Comfort: The elastic spandex outer ear loops are comfortable for long-wearing 
                        sessions by people of all ages. The built-in metal adjustable nose pin provides a perfect fit.</li>
                    <li>Fluid Resistant, Anti-Pollution & Anti-Dust: Designed to offer protection against bodily fluid
                         and spatter at high resistance. It also provides protection against dust and pollutants from 
                         the air.</li>
                    <li>3 Layer Non-Woven Fabric: 1st is Hydrophobic which is water resistant, 2nd is Melt Blown-SMMS 
                        fabric offering protection against bacteria/viruses & 3rd is Hydrophilic which absorbs water 
                        droplets & sweat.</li>
                    <li>Made in India: Our 3 Ply Face Masks are manufactured in a state-of-the-art facility that follows 
                        good manufacturing practices and is ISO 13485:2016 & BIS certified. The masks are packed in a
                         dispenser box for your convenience.</li>
                     
                </ul>
        </div>
</div>
</div><br><br><br><br><br><br>
<!--------------------------FOOTER STARTS------------------------------>
<?php include('include/footer.php'); ?>

<!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>