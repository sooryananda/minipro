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
            <th>Item Name</th>
            <th>Rate</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
            <?php

                $s="select * from stationary";
                $res=$db->query($s);
                if($res->num_rows>0)
                {
                    $i=0;
                    while($r=$res->fetch_assoc())
                    {
                        $i++; ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $r["name"]; ?></td>
                        <td><?php echo $r["rate"]; ?></td>
                        <td><?php echo $r["description"]; ?></td>
                        <td><img src="uploadimg/<?php echo $r['img']; ?>"> </td>
                        </tr> <?php
                    }
                }

            ?>
        
        
        <tbody>
    </table>
</div>
</div>


 </body>
</html>