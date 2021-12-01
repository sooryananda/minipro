<?php include ('include/adminheader.php'); ?>
 <?php include ('include/sidenav.php'); ?>

<div class="main">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Shop name</th>
            <th>Owner name</th>
            <th>Owner Mobile</th>
            <th>Place</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php

$s="select seller.shopname,seller.ownername,seller.mobile,seller.email,places.placename from places inner join seller on 
                 places.PID=seller.PID";
$res=$db->query($s);
if($res->num_rows>0)
{
    $i=0;
    while($r=$res->fetch_assoc())
    {
        $i++;
      echo  "<tr>
        <td>{$i}</td>
        <td>{$r["shopname"]}</td>
        <td>{$r["ownername"]}</td>
        <td>{$r["mobile"]}</td>
        <td>{$r["placename"]}</td>
        <td>{$r["email"]}</td>
        
        </tr>";
    }
}

?>
      
        <tbody>
    </table>
</div>
</div>
</body>
</html>