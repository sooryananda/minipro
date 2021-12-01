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
        <link rel="stylesheet" href="css/style2.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>Seller | Registration</title>
    </head>
    <body>

<?php
    include('include/header.php'); 
?>
<!---------------------------------------------------------------------->
<!----------------------sign up--------------------------------------->
<br><br><br><br><br><br>
<div class="row">
       <div class="col-2">
      <div class="signup-box2">
          <h1>Sign Up</h1>

        <?php
        if(isset($_POST["register"]))
        {
            $shopname=$_POST['shopname'];
            $ownername=$_POST['ownername'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $place=$_POST['placename'];
            $password=$_POST['password'];
            $pass=$_POST['password2'];
            if($password != $pass)
            {
                echo "<div>Password does not Match</div>";
            }
            else
            {
            
            $sql="insert into seller(shopname,ownername,mobile,email,password,PID) values('$shopname','$ownername','$mobile','$email','$password','$place')";
            if($db->query($sql))
            {
                ?> <div class="success"><p><?php echo "Successfully Registered"; ?></p></div>
                <?php
            }
            else
            {
                ?> <div class="success"><p><?php echo "Registration failed"; ?></p></div>
                <?php
            }
            } 
        }
        ?>
          <form action="" method="post">
              <label>Shop name</label>
              <input type="text" name="shopname" required>
              <label>Owner name</label>
              <input type="text" name="ownername" required>
              <label>Owner Mobile</label>
              <input type="tel" maxlength="13" pattern="+91[6-9]{1}[0-9]{9}" value="+91" name="mobile" required>

              <?php

                    $place="select * from places";
                    $pl=mysqli_query($db,$place);
                    if(mysqli_num_rows($pl)>0)
                    {
                    ?> 
                    <label>Place</label>
                        <select name="placename" required>
                        <option value="">Choose place..</option>
                        <?php
                        foreach($pl as $row)
                        {
                        ?>
                        <option value="<?php echo $row['PID']; ?>"><?php echo $row['placename']; ?></option>
                        <?php } ?>
                    </select>             
                            
                    <?php
                    }
                    else
                    {
                    echo "no data available";
                    }
                ?>



              <label>Email</label>
              <input type="email" name="email" required>
              <label>Password</label>
              <input type="password" name="password" required>
              <label>Confirm Password</label>
              <input type="password" name="password2" required>
              <input type="submit" name="register" value="Submit">
          </form>
          <p class="p-class">By clicking Submit you are agreeing to our<br><br>
          <u>Terms and conditions</u></p>
      </div>
      </div>

      <div class="col-2">

      <div class="login-box">
        <h1>Login</h1>
 
        <?php
           if(isset($_POST["login"]))
           {
              $sql="select * from seller where email='{$_POST["email"]}' and password='{$_POST["password"]}' ";
              $res=$db->query($sql);
              if($res->num_rows>0)
              {
                  $ro=$res->fetch_assoc();
                  $_SESSION["SID"]=$ro["SID"];
                  $_SESSION["email"]=$ro["email"];
                  echo "<script>window.open('seller.php','_self');</script>";
              }
              else{
                ?> <div class="success"><p><?php echo "Invalid Username or Password"; ?></p></div>
                <?php
              }

           }
           if(isset($_GET["mes"]))
           {
               echo "<div class='error'>{$_GET["mes"]}</div>";
           }
        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label>Email</label>
            <input name="email" type="email" required>
            <label>Password</label>
            <input name="password" type="password" required>
            <input type="submit" value="Submit" name="login">

        </form>
    
    </div></div>
</div> <br><br><br><br><br><br><br><br><br><br>
    <!--------------------------FOOTER STARTS------------------------------>
    <?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>


<!--Chitra Medicals
Prasad Sunil
9534628798
chitramedicals@gmail.com
chitra123-->

