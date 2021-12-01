<?php
 include ('include/database.php');
 session_start();

 unset ($_SESSION["UID"]);
 unset ($_SESSION["fname"]);
 unset ($_SESSION["email"]);

 session_destroy();
 echo "<script>window.open('registration.php','_self');</script>";
?>