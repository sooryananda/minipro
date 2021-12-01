<?php include ('include/adminheader.php'); ?>
 <?php include ('include/sidenav.php'); ?>

<div class="main">

<div class="table-wrapper" >
       <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php

$s="select * from users";
$res=$db->query($s);
if($res->num_rows>0)
{
    $i=0;
    while($r=$res->fetch_assoc())
    {
        $i++;
      echo  "<tr>
        <td>{$i}</td>
        <td>{$r["fname"]}</td>
        <td>{$r["lname"]}</td>
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