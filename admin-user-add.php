<?php
include("connection/connection.php");

// Get input values
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username already exists
$checkQuery = "SELECT * FROM `admin_user` WHERE `username` = '{$username}'";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // Username already exists
    $response = [
        'status' => 'ok',
        'success' => false,
        'message' => 'Username already exists!'
    ];
    print_r(json_encode($response));
} else {
    // Username is unique, proceed with insertion
    $sql = "INSERT INTO `admin_user`(`username`, `password`) VALUES ('{$username}', '{$password}')";

    if (mysqli_query($conn, $sql)) {
        $response = [
            'status' => 'ok',
            'success' => true,
            'message' => 'Record created successfully!'
        ];
        print_r(json_encode($response));
    } else {
        $response = [
            'status' => 'ok',
            'success' => false,
            'message' => 'Record creation failed!'
        ];
        print_r(json_encode($response));
    }
}
?>