<?php
    include ('include/database.php');
    session_start();
 ?>


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

 <!------------------------------------------------------------------->  
 
        <?php
    
        $s="select * from stationary";
        $res=$db->query($s);
        if($res->num_rows>0)
        {
            $i=0;
            while($r=$res->fetch_assoc())
            {
                $i++; ?>

         <form action="productdetails.php" method="post"> 
              <div class="row">
              <div class="col-4"><a href="productdetails.php"><img src="uploadimg/<?php echo $r['img']; ?>"> </a>
             <h3 class="hai"><?php echo $r["name"]; ?></h3>
             <p>RS <?php echo $r["rate"]; ?></p><br>
             <a href="productdetails.php?id=<?php echo $r["id"]; ?>" class="btn">View Details</a>
        </div>
        </form>
        <?php
                    }
                }

            ?>
    </div>
    </div>
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
    
      
      
