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
            <th>Stocks Left</th>
            <th>Action</th>
            

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
                    <form action="" method="post">
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r["productname"]; ?></td>
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
                $loc="insert into medicines(MID,id,SID,stock,ids) values('','$id','$SID','$qty',null)";
                $loca= mysqli_query($db,$loc);
                  if($loca)
                    {  
                         $hai="insert into medicines(PID) select PID from seller where SID='{$_POST['SID']}'";
                      $loca= $db->query($hai);
                      ?>
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


<!---
$check="SELECT * FROM persons WHERE Email = '$_POST[eMailTxt]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo "User Already in Exists<br/>";
}

        -->