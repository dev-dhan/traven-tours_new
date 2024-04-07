<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $mainSubheading = $_POST["mainSubheading"];
    $mainHeading = $_POST["mainHeading"];
    $mainText = $_POST["mainText"];
    $id = $_POST['id'];


    if (!empty($_FILES["mainImage"])) {
        // File upload handling
        $target_directory = "uploads/"; // Adjust this to your desired directory
        $original_file_name = $_FILES["mainImage"]["name"];

        // Generate a unique file name by appending a timestamp
        $timestamp = time();
        $mainImage = $timestamp . "_" . $original_file_name;

        $target_file = $target_directory . $mainImage;

        $jobImageQuery = "SELECT `main_image` FROM `introduction_content` WHERE id = $id";
        $resultJobImageQuery = mysqli_query($conn, $jobImageQuery);

        if ($resultJobImageQuery) {
            $row = mysqli_fetch_assoc($resultJobImageQuery);
            $profile_image = $row['main_image'];

            // Delete the profile image file
            if ($profile_image) {
                $image_path = "uploads/" . $profile_image; // Replace with the actual path
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        move_uploaded_file($_FILES["mainImage"]["tmp_name"], $target_file);

        // $sql = "UPDATE `introduction_content` SET `main_image` = '$mainImage', `main_subheading` = '$mainSubheading', `main_heading` = '$mainHeading' , `main_text` = '$mainText' WHERE `id` = $id";
        $stmt = $conn->prepare("UPDATE `introduction_content` SET `main_image` = ?, `main_subheading` = ?, `main_heading` =  ?, `main_text` = ? WHERE `id` = ?");
        $stmt->bind_param("ssssi", $mainImage, $mainSubheading, $mainHeading, $mainText, $id);


        if ($stmt->execute()) {
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
        // Prepare and bind SQL statement with parameter
        $stmt = $conn->prepare("UPDATE `introduction_content` SET `main_subheading` = ?, `main_heading` =  ?, `main_text` = ? WHERE `id` = ?");
        $stmt->bind_param("sssi", $mainSubheading, $mainHeading, $mainText, $id);

        // $sql = "UPDATE `introduction_content` SET `main_subheading` = '$mainSubheading', `main_heading` = '$mainHeading' , `main_text` = '$mainText' WHERE `id` = $id";

        if ($stmt->execute()) {
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