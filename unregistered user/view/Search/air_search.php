<?php

include_once '../../model/db.php';
$sql = "SELECT * FROM air_ticket WHERE airline_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
        <td><img src=".$row['airline_image']." style=\"width:50px;height:50px;\" > </td>
		          <td>".$row['airline_name']."</td>
                  <td>".$row['flight_no']."</td>
		          <td>".$row['air_ticket_type']."</td>
		          <td>".$row['air_ticket_price']."</td>
		          <td>".$row['plane_ticket_availability']."</td>
                  <td>".$row['plane_available_seat']."</td>
                  <td>".$row['plane_route']."</td>
                  <td>".$row['plane_start_location']."</td>
                  <td>".$row['plane_end_location']."</td>
                  <td>".$row['plane_journey_date']."</td>
                  <td>".$row['plane_arrival_time']."</td>
                  <td>".$row['plane_departure_time']."</td>
				  <td><img src=".$row['image']." style=\"width:50px;height:50px;\" > </td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>