<?php

require_once('../model/model.php');

$orderID = $_REQUEST['order_id'];
$bookingID = $_REQUEST['booking_id'];
$order = getOrderById($orderID);
$booking = getBookingById($bookingID);
?>

<html>

<head>
    <title>Cancel Order</title>
</head>

<body>
    <legend>CANCEL ORDER</legend>
    <form method="post" action="">
        <!-- Cancel Order -->
        <table>
            <tr>
                <td>
                    <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;<?= $order['journey_by'] ?>&nbsp;Ticket</strong>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Route:&nbsp;</strong><?= $order['start_location'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $order['end_location'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Status:&nbsp;</strong><?= $order['ticket_type'] ?>

                </td>
            </tr>
            <tr>
                <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;ORDER ID# <span style="color:blue"><?= $order['order_id'] ?></span></h1>
                <h2><span style="color:brown"><?= $order['transport_name'] ?></span></h2>
                <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Journey Date:&nbsp; <?= $order['journey_date'] ?></h4>

                <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $order['price'] ?></span></h2>
                <hr>
            </tr>
            <tr>
                <td>
                    <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Arrival Time: </strong><?= $order['arrival_time'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Departure Time: </strong><?= $order['departure_time'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="cancel-order.php?orderID=<?php echo $order['order_id']; ?>"> <button>Cancel</button></a>
                </td>
            </tr>
        </table>

        <!-- Cancel Booking -->
        <table>
            <tr>
                <td>
                    <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Booking:&nbsp;<?= $booking['booking_for'] ?></strong>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Location:&nbsp;</strong><?= $booking['location'] ?>
                </td>
            </tr>
            <tr>
                <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;ORDER ID# <span style="color:blue"><?= $booking['booking_id'] ?></span></h1>
                <h2><span style="color:brown"><?= $booking['name'] ?></span></h2>
                <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Event Date:&nbsp; <?= $booking['start_date'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $booking['end_date'] ?></h4>
                <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $booking['price'] ?></span></h2>
                <hr>
            </tr>
            <tr>
                <td>
                    <a href="cancel-order.php?bookingID=<?php echo $booking['booking_id']; ?>"> <button>Cancel</button></a>

                </td>
            </tr>
        </table>

    </form>
</body>

</html>