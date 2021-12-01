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
        <link rel="stylesheet" href="css/category-style.css" />  
        <link rel="stylesheet" href="css/style.css" /> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

        <title>Medihome</title>

    </head>
    <body>
<!---------------------------HEADER------------------------------------->
<!---------------------------------------------------------------------->

<?php
    include('include/header.php'); 
?>
<!---------------------HEADER ENDS------------------------------------->
<!---------------------MAIN PAGE STARTS-------------------------------->
<br><br><br><br><br>




<h1> Find Your Prescription Medicines</h1>


<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Medicine name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
         <?php

            $s="select * from products";
            $res=$db->query($s);
            if($res->num_rows>0)
            {
                $i=0;
                while($r=$res->fetch_assoc())
                {
                    $i++; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r["productname"]; ?></td>
                    <td><?php echo $r["price"]; ?></td>
                    <td><img class="medicine-image" src="uploadimage/<?php echo $r['img']; ?>"> </td>
                    <td><a href="productdetails2.php?id=<?php echo $r["id"]; ?>" class="btn">View Details</a></td>
                    </tr>
                    <?php
                }
            }

            ?>


        </tbody>
    </table>
</div>



<!--------------------------FOOTER STARTS------------------------------>
<?php include('include/footer.php'); ?>

 <!--------------------------FOOTER ENDS------------------------------>   

</body>
</html>