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
            <th>Item name</th>
            <th>Stocks Left</th>
            <th>Action</th>
            

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
                    <form action="" method="post">
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r["name"]; ?></td>
                    <td><input id="p2" type="number" name="stock" required></td>
                    <td><input type="hidden" name="proid" value="<?php echo $r['id']; ?>">
                       <input type="hidden" name="SID" value="<?php echo $_SESSION['SID']; ?>">
                       <input id="p1" class="butt" type="submit" name="submit" value="Add Item"></td>
                    </tr>
                 </form>
                    <?php
                }
            }


            if(isset($_POST["submit"]))
            {
            $SID=$_POST['SID'];
            $id=$_POST['proid'];
            $qty=$_POST['stock'];
            $check="SELECT * FROM medicines WHERE id ='{$_POST['proid']}'";
            $rs = $db->query($check);
            
            if($rs->num_rows>0)
            {
                ?> 
                <div class="success"><p><?php echo "Item Already Added"; ?></p></div>
                 <?php
            
                
            }
            else{
                $loc="insert into medicines(MID,id,SID,stock,ids) values('',null,'$SID','$qty','$id')";
                $loca= mysqli_query($db,$loc);
                  if($loca)
                    { ?>
                    <div class="success"><p><?php echo "Successfully Added"; ?></p></div>
                    <?php
                    }
                else
                { ?> 
                   <div class="success"><p><?php echo "Action Failed"; ?></p></div>
                <?php
                }
            
            }
        }
        ?>
     
        <tbody>
    </table>
</div>
</div>
 </body>
</html>