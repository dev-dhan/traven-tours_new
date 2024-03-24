<?php
include("connection/connection.php");
$id = $_GET['id'];

// Delete the database record
$sql = "DELETE FROM `testimonial_content` WHERE `id` = $id";

if (mysqli_query($conn, $sql)) {
    $response = [
        'status' => 'ok',
        'success' => true,
        'message' => 'Record deleted successfully!'
    ];
    print_r(json_encode($response));
} else {
    $response = [
        'status' => 'ok',
        'success' => false,
        'message' => 'Record deletion failed!'
    ];
    print_r(json_encode($response));
}
?>
