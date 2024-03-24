<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title_content = $_POST["title_content"];
    $id = $_POST['id'];


    if (!empty($_FILES["image_content"])) {
        // File upload handling
        $target_directory = "uploads/"; // Adjust this to your desired directory
        $original_file_name = $_FILES["image_content"]["name"];

        // Generate a unique file name by appending a timestamp
        $timestamp = time();
        $image_content = $timestamp . "_" . $original_file_name;

        $target_file = $target_directory . $image_content;

        $jobImageQuery = "SELECT `image_content` FROM `partnership_content` WHERE id = $id";
        $resultJobImageQuery = mysqli_query($conn, $jobImageQuery);

        if ($resultJobImageQuery) {
            $row = mysqli_fetch_assoc($resultJobImageQuery);
            $profile_image = $row['image_content'];

            // Delete the profile image file
            if ($profile_image) {
                $image_path = "uploads/" . $profile_image; // Replace with the actual path
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        move_uploaded_file($_FILES["image_content"]["tmp_name"], $target_file);

        $sql = "UPDATE `partnership_content` SET `image_content` = '$image_content', `title_content` = '$title_content' WHERE `id` = $id";

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
        $sql = "UPDATE `partnership_content` SET `title_content` = '$title_content' WHERE `id` = $id";

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