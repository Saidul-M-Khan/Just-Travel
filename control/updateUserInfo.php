<?php

require_once('../model/model.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
// $photo = $_REQUEST['photo'];
$photo = $_REQUEST['fileToUpload'];
$id = $_REQUEST['id'];


// // $photo = $_POST['filepath'];
// $target_dir = "../assets/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// // $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// $filepath = "";

// $Error = "";
// $ImageError = $UploadConfirmation = "";

// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);




// // File Upload Validation
// if ($_FILES['fileToUpload']['name'] != "") {

//     if ($check !== false) { // Checking if the file is image or not
//         $uploaded = 1;
//     } else {
//         $ImageError = "File is not an image.";
//         $uploaded = 0;
//     }

//     if (file_exists($target_file)) { // Checking if the file is already uploaded or not
//         $ImageError = "Sorry, file already exists.";
//         $uploaded = 0;
//     }

//     if ($_FILES["fileToUpload"]["size"] > 40000000000) { // Checking if thee file size is too large or not
//         $ImageError = "Sorry, your file is too large.";
//         $uploaded = 0;
//     }

//     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") { // Checking if the file is jpg/jpeg/png
//         $ImageError = "Sorry, only JPG, JPEG & PNG files are allowed.";
//         $uploaded = 0;
//     }

//     if ($uploaded == 0) { // Checking If the file is not uploaded
//         $ImageError = "Sorry, your file was not uploaded.";
//     } else {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // If the file is uploaded and moved to targeted file directory
//             $UploadConfirmation = "File has been uploaded Successfully";
//             $filepath = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
//         } else {
//             $ImageError = "Sorry, there was an error uploading your file.";
//         }
//     }
// } else {
//     $ImageError = "No Image was selected";
// }








// if (isset($_POST['display'])) {
//     $displayStatus = $_POST['display'];
// } else {
//     $displayStatus = "No";
// }

$user = ['id' => $id, 'username' => $username, 'password' => $password, 'email' => $email, 'photo' => $photo];
$status = editUserInfo($user);

if ($status) {
    header('location: ../view/profile.php');
} else {
    header('location: ../view/edit-profile.php?id={$id}');
}
