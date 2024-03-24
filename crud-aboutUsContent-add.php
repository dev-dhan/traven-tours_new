<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $about_image = $_FILES["about_image"]["name"];
    $about_heading = $_POST["about_heading"];
    $about_text = $_POST["about_text"];
    

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["about_image"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $about_image	 = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $about_image	;

    move_uploaded_file($_FILES["about_image"]["tmp_name"], $target_file);

    // SQL query to insert data into the table
    $sql = "INSERT INTO `about_content` (about_image, about_heading, about_text)
            VALUES ('$about_image', '$about_heading', '$about_text')";

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