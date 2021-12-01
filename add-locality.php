<?php
    include ('include/database.php');
    session_start();
?>

<?php include ('include/adminheader.php'); ?>
 <?php include ('include/sidenav.php'); ?>


 
         <?php

            if(isset($_POST["submit"]))
            {
              $locality=$_POST['localityname'];
              $id=$_POST['placename'];
              $loc="insert into locality(localityname,PID) values('$locality','$id')";
              $loca=mysqli_query($db,$loc);
               if($loca)
            {
              ?> <div class="success"><p><?php echo "Successfully Added"; ?></p></div>
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
         <h2>ADD LOCALITY</h2> 


        <form action="" method="post">
          <label>Locality Name</label>
          <input type="text" name="localityname" placeholder="locality name.." required>

          
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
                  echo "No data Available";
                
               }
              ?>

              
        
        
          <input name="submit" type="submit" value="Submit">
        </form>
      </div>

 </div>

</body>
</html>


<!---->