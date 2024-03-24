<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title_content = $_POST["title_content"];
    $description_content = $_POST["description_content"];
    $name_content = $_POST["name_content"];
    $jobTitle_content = $_POST["jobTitle_content"];

    

    // SQL query to insert data into the table
    $sql = "INSERT INTO `testimonial_content` (title_content, description_content, name_content, jobTitle_content)
            VALUES ('$title_content', '$description_content', '$name_content', '$jobTitle_content')";

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