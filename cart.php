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

        <title>MY CART</title>


    </head>
    <body>

<?php include('include/header.php') ?>
<br><br><br><br><br><br>


 <table class="customers">
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Actions</th>
  </tr>
  <tbody>
    <form action="buynow.php" method="post">
    <tr> 
      
  <?php
  if(isset($_GET["del"]))
  {
    foreach($_SESSION["cart"] as $keys=>$values)
    {
      if($values['id']==$_GET['del'])
      {
        unset($_SESSION["cart"][$keys]);
      }
    }
  } 
     if(!empty($_SESSION["cart"]))
     {
     
       $total=0;
       foreach($_SESSION["cart"] as $keys=>$values)
       {  
         $amt=$values["quantity"]*$values["rate"];
         $total+=$amt;  ?>
          <td><?php echo $values["name"]; ?><input type="hidden" name="name" value="<?php echo $values["name"]; ?>"></td>
          <td><?php echo $values["rate"]; ?><input type="hidden" name="rate" value="<?php echo $values["rate"]; ?>"></td> 
          <td><?php echo $values["quantity"]; ?><input type="hidden" name="quantity" value="<?php echo $values["quantity"]; ?>"></td>
          <td><?php echo $amt; ?><input type="hidden" name="amt" value="<?php echo $amt; ?>"></td>
          <td><a href="cart.php?del=<?php echo $values['id']; ?>">Remove</a></td>

</tr>          <?php
       }
     }
     else{
       header("Location:index.php");
     } 
?>
<tr>
  <td></td>
  <td></td>
  <td>Grand Total</td>
  <td><?php echo $total; ?><input type="hidden" value="<?php echo $total; ?>" name="total"></td>
  <td><input class="btn" name="submit" type="submit" value="Buy Now"></td>
  
</tr>          
</form>
</tbody>
</table>



    <!--    if(isset($_POST["submit"]))
        {
            $name=$_POST['name'];
            $amt=$_POST['amt'];
            $rate=$_POST['rate'];
            $quantity=$_POST['quantity'];
            $total=$_POST['total'];
            $UID=$_SESSION['UID'];
            
            $sql="insert into Orders(name,rate,quantity,amt,total,UID) values('$name','$rate','$quantity',$amt,'$total','$UID')";
            if($db->query($sql))
            {
                ?> <div class="success"><p> echo "Your Order Has been Placed"; ?></p></div>
                
            }
            else{
                ?> <div class="success"><p>echo "Error"; ?></p></div>
                
             }
            } -->
        
        

 <br><br><br><br><br><br>

<?php include('include/footer.php') ?>
</body>
</html>