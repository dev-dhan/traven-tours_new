<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $travel_package_price = $_POST["travel_package_price"];
    $travel_package_promo = $_POST["travel_package_promo"];
    $travel_package_location = $_POST["travel_package_location"];
    $travel_package_contact = $_POST["travel_package_contact"];
    $travel_package_description_title = $_POST["travel_package_description_title"];
    $travel_package_description_content = $_POST["travel_package_description_content"];
    $travel_package_contact_details = $_POST["travel_package_contact_details"];
    $id = $_POST['id'];


    if (!empty($_FILES["travel_package_image"])) {
        // File upload handling
        $target_directory = "uploads/"; // Adjust this to your desired directory
        $original_file_name = $_FILES["travel_package_image"]["name"];

        // Generate a unique file name by appending a timestamp
        $timestamp = time();
        $travel_package_image = $timestamp . "_" . $original_file_name;

        $target_file = $target_directory . $travel_package_image;

        $jobImageQuery = "SELECT `travel_package_image` FROM `travelPackage` WHERE id = $id";
        $resultJobImageQuery = mysqli_query($conn, $jobImageQuery);

        if ($resultJobImageQuery) {
            $row = mysqli_fetch_assoc($resultJobImageQuery);
            $profile_image = $row['travel_package_image'];

            // Delete the profile image file
            if ($profile_image) {
                $image_path = "uploads/" . $profile_image; // Replace with the actual path
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        move_uploaded_file($_FILES["travel_package_image"]["tmp_name"], $target_file);

    
        $stmt = $conn->prepare("UPDATE `travelPackage` SET `travel_package_image` = ?, `travel_package_price` = ?, `travel_package_promo` =  ?, `travel_package_location` = ?, `travel_package_contact` = ?, `travel_package_description_title` = ?, `travel_package_description_content` = ?, `travel_package_contact_details` = ? WHERE `id` = ?");

        $stmt->bind_param("ssssssssi", $travel_package_image, $travel_package_price, $travel_package_promo, $travel_package_location, $travel_package_contact, $travel_package_description_title, $travel_package_description_content, $travel_package_contact_details, $id);



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
        $stmt = $conn->prepare("UPDATE `travelPackage` SET `travel_package_price` = ?, `travel_package_promo` =  ?, `travel_package_location` = ?, `travel_package_contact` = ?, `travel_package_description_title` = ?, `travel_package_description_content` = ?, `travel_package_contact_details` = ? WHERE `id` = ?");

        $stmt->bind_param("sssssssi", $travel_package_price, $travel_package_promo, $travel_package_location, $travel_package_contact, $travel_package_description_title, $travel_package_description_content, $travel_package_contact_details, $id);

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