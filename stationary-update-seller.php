<?php
    include ('include/database.php');
?>

<?php include ('include/sellerheader.php'); ?>
 <?php include ('include/seller-sidenav.php'); ?>

<div class="main">
 
<div class="table-wrapper">
        <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Medicine name</th>
            <th>Stocks Update</th>
            <th>Action</th>
             </tr>
        </thead>
        <tbody>
              <?php

                $s="select medicines.stock,stationary.name from stationary inner join medicines on 
                stationary.id=medicines.ids where medicines.SID='{$_SESSION['SID']}'";
                $res=mysqli_query($db,$s);
                if($res->num_rows>0)
                {
                    $i=0;
                    while($r=$res->fetch_assoc())
                    {
                        $i++; ?>
                    <tr>
                        <form action="" method="post">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $r["name"]; ?></td>
                        <td><input type="number" name="stock" class=""></td>
                        <td><input class="butt" type="submit" name="submit" value="Update"></td>
                        </tr></form> <?php
                    }
                }

                if(isset($_POST["submit"]))
                {
                $place=$_POST['stock'];
                $sq="UPDATE medicines SET stock='{$_POST['stock']}' WHERE
                            medicines.SID='{$_SESSION['SID']}'";
                if($db->query($sq))
                {
                ?> <div class="success"><p><?php echo "Succesfully Updated"; ?></p></div>
                <?php
                }
                else
                {
                ?> <div class="success"><p><?php echo "Action Failed"; ?></p></div>
                <?php
                }
                }

                ?>
        
        <tbody>
    </table>
</div>
</div>
 </body>
</html>