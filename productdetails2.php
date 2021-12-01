<?php
    include ('include/database.php');
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta productname="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="stylesheet" href="css/style.css" /> 
        <link rel="stylesheet" href="css/detail-css.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>Medihome</title>
    </head>
    
    
    
    <body>





<!---------------------------HEADER and navigation------------------------------------->
<?php  include('include/header.php'); ?>
<!---------------------------------------------------------------------->
<div class="small-container">




<!--------------------------PHP TABLES-------------------------------------------->


        <?php
        
        if(isset($_GET["id"]))
        {
        $s="select * from products where id={$_GET["id"]}";
        $res=$db->query($s);
        if($res->num_rows>0)
        {
            $r=$res->fetch_assoc(); ?>

 <form action='<?php echo $_SERVER["REQUEST_URI"]; ?>' method="post">
      <table>
        <tr><td colspan="2"><img class="image-1" src="uploadimage/<?php echo $r['img']; ?>"> </td></tr>
        <tr><td colspan="2"> <input type="submit" name="submit" value="Add to Cart">
            <a class="btn" href="#">Buy Now</a></td></tr>
        <tr><td>Price</td><td><?php echo $r["price"]; ?></td></tr>
        <tr><td>Quantity</td><td><input type="number" name="quantity" required>
          <input type="hidden" value="<?php echo $r["price"]; ?>" name="rate">
          <input type="hidden" value="<?php echo $r["productname"]; ?>" name="name"></td> </tr>
        <tr><td>Description</td><td><?php echo $r["description"]; ?></td></tr>
      </table>
</form>
        <?php
                    }
                }

            ?>

<?php
  
        if(isset($_POST["submit"])){
          if(isset($_SESSION["UID"]))
         {
          if(isset($_SESSION["cart"])){
               $id_array=array_column($_SESSION["cart"],"id");
               if(!in_array($_GET["id"],$id_array)){
                      $index=count($_SESSION["cart"]);
                      $item=array(
                        'id'=>$_GET['id'],
                        'name'=>$_POST['name'],
                        'rate'=>$_POST['rate'],
                        'quantity'=>$_POST['quantity']  );
                        $_SESSION["cart"][$index]=$item;
                        echo "<script>alert('Product Added to Cart');</script>";
               }
               else{
                 echo "<script>alert('Already In Cart');</script>";
               }
          }
          else{
              $item=array(
                'id'=>$_GET['id'],
                'name'=>$_POST['name'],
                'rate'=>$_POST['rate'],
                'quantity'=>$_POST['quantity']
              );
              $_SESSION["cart"][0]=$item;
              echo "<script>alert('Product Added to Cart');</script>";
          }  
          }else{
          header("Location:registration.php");
        }
        } 
        
        ?>


<!--------------------------------------------------------------------------------->
    

</div><br><br><br><br><br><br>
<!--------------------------FOOTER STARTS------------------------------>
<?php include('include/footer.php'); ?>

<!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>
