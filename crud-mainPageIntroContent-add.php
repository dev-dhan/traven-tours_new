<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $mainImage = $_FILES["mainImage"]["name"];
    $mainSubheading = $_POST["mainSubheading"];
    $mainHeading = $_POST["mainHeading"];
    $mainText = $_POST["mainText"];
    

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["mainImage"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $mainImage = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $mainImage;

    move_uploaded_file($_FILES["mainImage"]["tmp_name"], $target_file);

    // SQL query to insert data into the table
    $sql = "INSERT INTO `introduction_content` (main_image, main_subheading, main_heading, main_text)
            VALUES ('$mainImage', '$mainSubheading', '$mainHeading', '$mainText')";

    if (mysqli_query($conn, $sql)) {
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