<?php
 include ('include/database.php');
 session_start();

 unset ($_SESSION["SID"]);
 unset ($_SESSION["email"]);

 session_destroy();
 echo "<script>window.open('seller-registration.php','_self');</script>";
?>