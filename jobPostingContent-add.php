<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $job_image = $_FILES["jobImageFile"]["name"];
    $job_role = $_POST["jobRole"];
    $location = $_POST["jobLocation"];
    $job_type = $_POST["jobType"];
    
    // Set date_created to today's date
    $date_created = date("Y-m-d");

    $job_description = $_POST["jobDescription"];
    $qualification = $_POST["jobQualification"];

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["jobImageFile"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $job_image = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $job_image;

    move_uploaded_file($_FILES["jobImageFile"]["tmp_name"], $target_file);

    // SQL query to insert data into the table
    $sql = "INSERT INTO `job_posting` (job_image, job_role, location, job_type, date_created, job_description, qualification)
            VALUES ('$job_image', '$job_role', '$location', '$job_type', '$date_created', '$job_description', '$qualification')";

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