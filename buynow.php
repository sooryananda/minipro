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
        <link rel="stylesheet" href="css/buynow.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>ORDER PLACEMENT</title>


</head>
    <body>

<?php include('include/header.php') ?>
<br><br>
<div class="main">
           <h2>Your Details</h2> 




   <div class="form-css">
   <form action="buynow.php" method="post">
         <label>Your Full Name</label>
         <input type="text" name="Fullname" required>
         <label>Address</label>
         <input type="text" name="Housename" required>
         <label>Landmark</label>
         <input type="text" name="Landmark" required>
         <label>Pincode</label><br>
         <input type="number" name="pincode" required><br>
         

          <?php

              $place="select * from locality";
              $pl=mysqli_query($db,$place);
              if(mysqli_num_rows($pl)>0)
              {
               ?> 
                <label>Locality</label>
                  <select name="localityname" required>
                  <option value="">Choose locality..</option>
                  <?php
                  foreach($pl as $row)
                  {
                   ?>
                  <option value="<?php echo $row['LID']; ?>"><?php echo $row['localityname']; ?></option>
                  <?php } ?>
              </select>             
                        
              <?php
              }
              else
              {
                  echo "No data Available";
                
              }
            
          ?>

<div class="col-50">
<br><br><br> <h3>Payment</h3><br>


            <div class="navbar">
              <div class="dropdown">
              <button class="dropbtn" onclick="myFunction()">Credit Card
              </button>
              <div class="dropdown-content" id="myDropdown">


                <label class="hai2" for="cname">Name on Card</label>
                <input class="hai2" type="text" name="cardname" placeholder="John More Doe" required>
                <label class="hai2" for="ccnum">Credit card number</label><br>
                <input class="hai2" type="text" maxlength="19" name="cardnumber" required placeholder="1111-2222-3333-4444"><br>
                <label class="hai2" for="expmonth">Expiry</label>
                <input class="hai2" type="number" required name="expmonth" maxlength="2"> /
                <input class="hai2" type="number" required name="expyear" maxlength="2"><br>
                <label class="hai2" for="cvv">CVV</label>
                <input class="hai2" type="number" maxlength="3" required name="cvv" placeholder="352">
                <input type="submit" value="Submit" name="submit">

              </div>
              </div> 
            </div>
            <br>
            <div class="navbar">
              <div class="dropdown">
              <button class="dropbtn" onclick="myFunction2()">Debit Card
              </button>
              <div class="dropdown-content" id="myDropdown2">

                <label class="hai2" for="cname">Name on Card</label>
                <input class="hai2" type="text" name="cardname" placeholder="John More Doe">
                <label class="hai2" for="ccnum">Credit card number</label><br>
                <input class="hai2" type="text" maxlength="19" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
                <label class="hai2" for="expmonth">Expiry</label>
                <input class="hai2" type="number" name="expmonth" maxlength="2"> /
                <input class="hai2" type="number" name="expyear" maxlength="2"><br>
                <label class="hai2" for="cvv">CVV</label>
                <input class="hai2" type="number" maxlength="3" name="cvv" placeholder="352">
                <input type="submit" value="Submit" name="submit">
              </div>
              </div> 
            </div>

<br><br><br><br>
      
            
         
        </div>
</div>
</div></form>

            <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
            function myFunction2() {
              document.getElementById("myDropdown2").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown2");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
            </script>


 <br><br><br><br>
<!--------------------------FOOTER STARTS------------------------------>
<?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>

