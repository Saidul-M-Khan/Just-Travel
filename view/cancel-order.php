<?php

// require_once('../model/db.php');
require_once('../model/model.php');

// function cancelOrder($order_id)
// {
//     $con = getConnection();
//     $sql = "delete from orders where order_id={$order_id}";
//     if (mysqli_query($con, $sql)) {
//         return true;
//         header('location: ./order-status.php');
//     } else {
//         return false;
//     }

//     // mysqli_query($con, $sql);
// }

$order_id = $_REQUEST['order_id'];
$booking_id = $_REQUEST['booking_id'];

if (cancelOrder($_GET['order_id'])) {
    header('location: ./order-status.php');
}

if (cancelBooking($_GET['booking_id'])) {
    header('location: ./order-status.php');
}
