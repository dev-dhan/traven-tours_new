<?php
include("connection/connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['admin_id'];

// Check if the new username already exists in the database
$checkUsernameQuery = "SELECT COUNT(*) as count FROM `admin_user` WHERE `username` = '$username' AND `id` <> $id";
$result = mysqli_query($conn, $checkUsernameQuery);
$row = mysqli_fetch_assoc($result);
$usernameCount = $row['count'];

if ($usernameCount > 0) {
    // Username already exists, return an error message
    $response = [
        'status' => 'ok',
        'success' => false,
        'message' => 'Username must be unique. Please choose a different username.'
    ];
    print_r(json_encode($response));
} else {
    // Update the record if the username is unique
    $sql = "UPDATE `admin_user` SET `username` = '$username', `password` = '$password' WHERE `id` = $id";

    if (mysqli_query($conn, $sql)) {
        $response = [
            'status' => 'ok',
            'success' => true,
            'message' => 'Record updated successfully!'
        ];
        print_r(json_encode($response));
    } else {
        $response = [
            'status' => 'ok',
            'success' => false,
            'message' => 'Record update failed!'
        ];
        print_r(json_encode($response));
    }
}
?>
