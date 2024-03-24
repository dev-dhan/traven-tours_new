<?php
include("connection/connection.php");
$id = $_GET['id'];

// Fetch the profile image file name from the database before deleting the record
$sql_select_image = "SELECT `image_content` FROM `partnership_content` WHERE id = $id";
$result_select_image = mysqli_query($conn, $sql_select_image);

if ($result_select_image) {
    $row = mysqli_fetch_assoc($result_select_image);
    $profile_image = $row['image_content'];

    // Delete the profile image file
    if ($profile_image) {
        $image_path = "uploads/" . $profile_image; // Replace with the actual path
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }
}

// Delete the database record
$sql = "DELETE FROM `partnership_content` WHERE `id` = $id";

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
