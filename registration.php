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

        <title>Medihome</title>
    </head>
    <body>

<?php
    include('include/header.php'); 
?>
<!---------------------------------------------------------------------->
<!----------------------sign up--------------------------------------->
<br><br><br><br><br><br>


        <?php
        if(isset($_POST["register"]))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email_user'];
            $password=$_POST['pass_user'];
            $pass=$_POST['password'];
            if($password != $pass)
            {
                ?> <div class="success"><p><?php echo "Passwords donot match"; ?></p></div>
                <?php
            }
            else
            {
            
            $sql="insert into users(fname,lname,email,password) values('$fname','$lname','$email','$password')";
            if($db->query($sql))
            {
                ?> <div class="success"><p><?php echo "Successfully Registered"; ?></p></div>
                <?php
            }
            else{
                ?> <div class="success"><p><?php echo "Registration Failed"; ?></p></div>
                <?php
             }
            } 
        }
        ?>
 <div class="row">
    <div class="col-2">
      <div class="signup-box">
         <h1>Sign Up</h1>
          <form action="" method="post">
              <label for="">First name</label>
              <input type="text" name="fname" required>
              <label for="">Last name</label>
              <input type="text" name="lname" required>
              <label for="">Email</label>
              <input type="email" name="email_user" required>
              <label for="">Password</label>
              <input type="password" name="pass_user" required>
              <label for="">Confirm Password</label>
              <input type="password" name="password" required>
              <input type="submit" name="register" value="Submit">
          </form>
          <p>By clicking Submit you are agreeing to our<br><br>
          <u>Terms and conditions</u></p>
      </div>
      </div>

    
         <?php

        include ('include/database.php');
        

        if(isset($_POST["login"]))
        {
        $sql="select * from users where email='{$_POST["email_user"]}' and password='{$_POST["pass_user"]}' ";
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
            $ro=$res->fetch_assoc();
            $_SESSION["UID"]=$ro["UID"];
            $_SESSION["email"]=$ro["email"];
            $_SESSION["fname"]=$ro["fname"];
            echo "<script>window.open('index.php','_self');</script>";
        }
        else{
            ?> <div class="success"><p><?php echo "Invalid Username or Password"; ?></p></div>
            <?php
        }

        }
     ?>
    <div class="col-2">

      <div class="login-box">
           <h1>Login</h1>


        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label for="">Email</label>
            <input name="email_user" type="email" required>
            <label for="">Password</label>
            <input name="pass_user" type="password" required>
            <input type="submit" value="Submit" name="login">

        </form>
    
    </div></div>
</div> <br><br><br><br><br><br><br><br><br><br>
    <!--------------------------FOOTER STARTS------------------------------>
    <?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>

