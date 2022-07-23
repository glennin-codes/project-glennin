<?php
$server="localhost";
$dbusername="root";
$pwd=" ";
$dbname="glennin shopping cart";
  $conn=mysqli_connect($server,$dbusername,$pwd,$dbname)
  if (!$conn) {
      die('connection failed: '. mysqli_connect_error());
  }