<?php

require_once('../model/db.php');

// function addProduct($product)
// {
//     $con = getConnection();
//     $sql = "insert into products values('', '{$product['product_name']}', '{$product['product_buying_price']}', '{$product['product_selling_price']}', '{$product['displayable']}')";

//     if (mysqli_query($con, $sql)) {
//         return true;
//     } else {
//         return false;
//     }
// }

function getAllBusTicket()
{
    $con = getConnection();
    $sql = "select * from bus_ticket where (bus_ticket_availability='Available') or (bus_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllLaunchTicket()
{
    $con = getConnection();
    $sql = "select * from launch_ticket where (launch_ticket_availability='Available') OR (launch_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllAirTicket()
{
    $con = getConnection();
    $sql = "select * from air_ticket where (plane_ticket_availability='Available') OR (plane_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllEventTicket()
{
    $con = getConnection();
    $sql = "select * from event_ticket where (event_ticket_availability='Available') OR (event_ticket_availability='available')";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllHotel()
{
    $con = getConnection();
    $sql = "select * from hotel";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllPlace()
{
    $con = getConnection();
    $sql = "select * from places";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getAllOffer()
{
    $con = getConnection();
    $sql = "select * from offers";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getUserById($id)
{
    $con = getConnection();
    $sql = "select * from users where id={$id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getBusTicketById($bus_ticket_id)
{
    $con = getConnection();
    $sql = "select * from bus_ticket where bus_ticket_id={$bus_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getLaunchTicketById($launch_ticket_id)
{
    $con = getConnection();
    $sql = "select * from launch_ticket where launch_ticket_id={$launch_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getAirTicketById($air_ticket_id)
{
    $con = getConnection();
    $sql = "select * from air_ticket where air_ticket_id={$air_ticket_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getEventTicketById($event_id)
{
    $con = getConnection();
    $sql = "select * from event_ticket where event_id={$event_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getHotelById($hotel_id)
{
    $con = getConnection();
    $sql = "select * from hotel where hotel_id={$hotel_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getEventDetailsById($event_id)
{
    $con = getConnection();
    $sql = "select * from event_ticket where event_id={$event_id}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function editUserInfo($user)
{
    $con = getConnection();
    $sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', photo='{$user['photo']}' where id={$user['id']}";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteProfile($id)
{
    $con = getConnection();
    $sql = "delete from users where id={$id}";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
