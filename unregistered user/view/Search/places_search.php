<?php
               include_once '../../model/db.php';
            //    if($mysqli->connect_error) {
            //     exit('Could not connect');
            //   }
                $query = "SELECT place_id, place_name, place_description, place_image FROM places WHERE place_id = ?";
                // $query = "SELECT * FROM places";

                $stmt = $mysqli->prepare($query);
                $stmt->bind_param("s", $_GET['q']);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($place_id, $place_name, $place_description, $place_image);
                $stmt->fetch();
                $stmt->close();

                echo "<table>";
                echo "<tr>";
                echo "<th>placeName</th>";
                echo "<td>" . $place_name . "</td>";
                echo "<th>placeDescription</th>";
                echo "<td>" . $place_description . "</td>";
                echo "<th>Image</th>";
                echo "<td>" . $place_image . "</td>";
                echo "</tr>";
                echo "</table>";
                ?>