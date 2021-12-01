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
<!---------------------------------->

        <?php
           if(isset($_POST["login"]))
           {
              $sql="select * from admin where ANAME='{$_POST["email_ad"]}' and APASS='{$_POST["pass_ad"]}' ";
              $res=$db->query($sql);
              if($res->num_rows>0)
              {
                  $ro=$res->fetch_assoc();
                  $_SESSION["AID"]=$ro["AID"];
                  $_SESSION["ANAME"]=$ro["ANAME"];
                  echo "<script>window.open('admin.php','_self');</script>";
              }
              else{
                 ?> <div class="success"><p><?php echo "Invalid Username or Password"; ?></p></div>
                 <?php
              }

           }
           if(isset($_GET["mes"]))
           {
              ?> <div class="success"><p><?php echo "{$_GET["mes"]}"; ?></p></div>
              <?php
           }
        ?>



<div class="login-box">
        <h1>Login</h1>
 
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="">Email</label>
            <input type="text" name="email_ad" placeholder="" required>
            <label for="">Password</label>
            <input type="password" name="pass_ad" placeholder="" required>
            <input type="submit" value="Submit" name="login">

        </form>
</div>
    <br><br><br><br>
    <!--------------------------FOOTER STARTS------------------------------>
    <?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>



