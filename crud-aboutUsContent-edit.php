<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $about_heading = $_POST["about_heading"];
    $about_text = $_POST["about_text"];
    $id = $_POST['id'];


    if (!empty($_FILES["about_image"])) {
        // File upload handling
        $target_directory = "uploads/"; // Adjust this to your desired directory
        $original_file_name = $_FILES["about_image"]["name"];

        // Generate a unique file name by appending a timestamp
        $timestamp = time();
        $about_image = $timestamp . "_" . $original_file_name;

        $target_file = $target_directory . $about_image;

        $jobImageQuery = "SELECT `about_image` FROM `about_content` WHERE id = $id";
        $resultJobImageQuery = mysqli_query($conn, $jobImageQuery);

        if ($resultJobImageQuery) {
            $row = mysqli_fetch_assoc($resultJobImageQuery);
            $profile_image = $row['about_image'];

            // Delete the profile image file
            if ($profile_image) {
                $image_path = "uploads/" . $profile_image; // Replace with the actual path
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        move_uploaded_file($_FILES["about_image"]["tmp_name"], $target_file);

        $sql = "UPDATE `about_content` SET `about_image` = '$about_image', `about_heading` = '$about_heading' , `about_text` = '$about_text' WHERE `id` = $id";

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
    } else {
        $sql = "UPDATE `about_content` SET `about_heading` = '$about_heading' , `about_text` = '$about_text' WHERE `id` = $id";

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

}
?>