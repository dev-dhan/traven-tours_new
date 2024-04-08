<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $travel_package_image = $_FILES["travel_package_image"]["name"];
    $travel_package_price = $_POST["travel_package_price"];
    $travel_package_promo = $_POST["travel_package_promo"];
    $travel_package_location = $_POST["travel_package_location"];
    $travel_package_contact = $_POST["travel_package_contact"];
    $travel_package_description_title = $_POST["travel_package_description_title"];
    $travel_package_description_content = $_POST["travel_package_description_content"];
    $travel_package_contact_details = $_POST["travel_package_contact_details"];
    
    // Set date_created to today's date
    $date_created = date("Y-m-d");

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["travel_package_image"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $travel_package_image = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $travel_package_image;

    move_uploaded_file($_FILES["travel_package_image"]["tmp_name"], $target_file);

    // SQL query to insert data into the table

    $stmt = $conn->prepare("INSERT INTO `travelPackage` (`travel_package_image`, `travel_package_price`, `travel_package_promo`, `travel_package_location`, `travel_package_contact`, `travel_package_description_title`, `travel_package_description_content`, `travel_package_contact_details`, `date_created`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $travel_package_image, $travel_package_price, $travel_package_promo, $travel_package_location, $travel_package_contact, $travel_package_description_title, $travel_package_description_content, $travel_package_contact_details, $date_created);

    if ($stmt->execute()) {
        $response = [
            'status' => 'ok',
            'success' => true,
            'message' => 'Record inserted successfully'
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
