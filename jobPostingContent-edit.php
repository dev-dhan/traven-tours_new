<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $job_role = $_POST["jobRole"];
    $location = $_POST["jobLocation"];
    $job_type = $_POST["jobType"];
    $job_description = $_POST["jobDescription"];
    $qualification = $_POST["jobQualification"];
    $id = $_POST['id'];


    if (!empty($_FILES["jobImageFile"])) {
        // File upload handling
        $target_directory = "uploads/"; // Adjust this to your desired directory
        $original_file_name = $_FILES["jobImageFile"]["name"];

        // Generate a unique file name by appending a timestamp
        $timestamp = time();
        $job_image = $timestamp . "_" . $original_file_name;

        $target_file = $target_directory . $job_image;

        $jobImageQuery = "SELECT `job_image` FROM `job_posting` WHERE id = $id";
        $resultJobImageQuery = mysqli_query($conn, $jobImageQuery);

        if ($resultJobImageQuery) {
            $row = mysqli_fetch_assoc($resultJobImageQuery);
            $profile_image = $row['job_image'];

            // Delete the profile image file
            if ($profile_image) {
                $image_path = "uploads/" . $profile_image; // Replace with the actual path
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        move_uploaded_file($_FILES["jobImageFile"]["tmp_name"], $target_file);

        $sql = "UPDATE `job_posting` SET `job_image` = '$job_image', `job_role` = '$job_role', `location` = '$location' , `job_type` = '$job_type' , `job_description` = '$job_description' , `qualification` = '$qualification'  WHERE `id` = $id";

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
        $sql = "UPDATE `job_posting` SET `job_role` = '$job_role', `location` = '$location' , `job_type` = '$job_type' , `job_description` = '$job_description' , `qualification` = '$qualification'  WHERE `id` = $id";

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