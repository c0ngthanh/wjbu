<?php
require_once 'connection.php';
$orders_id=$_GET['ID'];
$sql="UPDATE orders set `status`='paid' where id='$orders_id'";
if (mysqli_query($conn, $sql)) header('location:orders.php?sort=id&search=&type=orders&page=1');
?>