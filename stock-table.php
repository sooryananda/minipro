<?php
    include ('include/database.php');
    session_start();
?>

<?php include ('include/adminheader.php'); ?>
 <?php include ('include/sidenav.php'); ?>

<div class="main">
 
<div class="table-wrapper">
        <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Medicine name</th>
            <th>Price</th>
            <th>Image</th>

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
                    <td><img src="uploadimage/<?php echo $r['img']; ?>"></td>
                    </tr>
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