<?php
    include ('include/database.php');
    session_start();
?>

<?php include ('include/adminheader.php'); ?>
 <?php include ('include/sidenav.php'); ?>


           <?php
               
               if(isset($_POST["submit"]))
               {
                $place=$_POST['placename'];
                 $sq="insert into places(placename) values('$place')";
                 if($db->query($sq))
            {
              ?> <div class="success"><p><?php echo "Succesfully Added"; ?></p></div>
              <?php
            }
            else
            {
              ?> <div class="success"><p><?php echo "Action Failed"; ?></p></div>
              <?php
            }
               }

           ?>
<div class="main">
   
    <div class="form-css">
         <h2>ADD PLACE</h2>

        <form action="" method="post">
          <label>Place Name</label>
          <input type="text" name="placename" placeholder="Place name..">

 
        
          <input name="submit" type="submit" value="Submit">
        </form>
      </div>

 </div>

</body>
</html>