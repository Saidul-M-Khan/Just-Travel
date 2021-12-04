<?php

// Create connection
include "../model/db.php";
// $link = "../edit/hotel/edithotel.php?id=\$row['hotel_id']";
// $but = "button";

$sql = "SELECT * FROM bus_ticket WHERE bus_start_location LIKE '%" . $_POST['startLocation'] . "%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "	 <tr>
                    <td>" . $row['hotel_id'] . "</td>
                    <td>" . $row['hotel_name'] . "</td>
                    <td>" . $row['hotel_location'] . "</td>
                    <td>" . $row['regular_booking_price'] . "</td>
                    <td>" . $row['discounted_booking_price'] . "</td>
                    <td>" . $row['hotel_services'] . "</td>

                    <td><img src=" . $row['hotel_image'] . " style=\"width:50px;height:50px;\" > </td>
                    <td><button class=\"$but\" type=\"$but\"><a href='$link'> EDIT </a> </button></td>
                    <td><button class=\"$but\" type=\"$but\">Delete</button></td>
                </tr> ";
    }
} else {
    echo "<tr><td>0 result's found</td></tr>";
}
