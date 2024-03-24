<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $image_content = $_FILES["image_content"]["name"];
    $title_content = $_POST["title_content"];
    $description_content = $_POST["description_content"];
    

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["image_content"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $image_content = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $image_content;

    move_uploaded_file($_FILES["image_content"]["tmp_name"], $target_file);

    // SQL query to insert data into the table
    $sql = "INSERT INTO `service_content` (image_content, title_content, description_content)
            VALUES ('$image_content', '$title_content', '$description_content')";

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