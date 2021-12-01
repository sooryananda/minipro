<?php
    include ('include/database.php');
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/adminstyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <title>Admin | Panel</title>
</head>
<body>

<?php

if(isset($_POST['submit']))
{
  $product=$_POST['product_name'];
  $price=$_POST['price'];
	$file=$_FILES['img'];
	$img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$filerror=$_FILES['img']['error'];
	$filetype=$_FILES['img']['type'];
	
	$file_ext=explode('.',$img_name);
	$fileac=strtolower(end($file_ext));
	$allowed=array('jpg','jpeg', 'png','jfif');
		if(in_array($fileac,$allowed))
		{
			if($filerror==0)
			{
				$new_img_name = uniqid('', true). '.'.$fileac;
				$img_upload_path = 'uploadimage/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
					$sql = "INSERT INTO products(id,productname,price,img) 
				        VALUES('','$product','$price','$new_img_name')";
			if($db->query($sql))
      {
           header('location:stock-table.php');
      }
			}
			else
			{
				?> <div class="success"><p><?php echo "Error"; ?></p></div>
                 <?php
			}
		}
		else
		{
			echo"<script>window.open('admin.php?mes=invalid file','_self');</script>";
		}
}
?>


        <header class="header">
            <div><img src="images/logo.png" alt="Logo" class="logo-1"></div>
             <nav class="main-nav">
             <ul class="main-nav-list">
                <li class="size-nav">Hello admin |</li>
                <li><a class="size-nav" href="admin.php">Home</a></li>
             </ul>
          
         </nav>
        </header>

 <?php include ('include/sidenav.php'); ?>


 <div class="main">
   
    <div class="form-css">
         <h2>ADD Medicine</h2>
        
 
        <form action="" method="post" enctype="multipart/form-data">
          <label>Medicine name</label>
          <input type="text" name="product_name" required>
          <label>Price</label>
          <input type="text" name="price" required>
          <label>Add Image</label>
          <input type="file" name="img" required>   
          <input name="submit" type="submit" value="Submit">
        </form>
      </div>

 </div>

</body>
</html>