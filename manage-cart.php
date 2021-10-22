<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
      if(isset($_POST['add-to-cart']))
      {
          if(isset($_SESSION['cart']))
          {

          }
          else
          {
              $_SESSION['cart'][0]=array('item-name'=>$_POST['item-name'],'price'=>$_POST['price'],'quantity'=>1]);
              print_r($_SESSION['cart']);
          }
      }

}

?>