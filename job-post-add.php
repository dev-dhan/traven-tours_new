<?php
include("connection/connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $job_image = $_FILES["job_image"]["name"];
    $job_role = $_POST["job_role"];
    $location = $_POST["location"];
    $job_type = $_POST["job_type"];
    
    // Set date_created to today's date
    $date_created = date("Y-m-d");

    $job_description = $_POST["job_description"];
    $qualification = $_POST["qualification"];

    // File upload handling
    $target_directory = "uploads/"; // Adjust this to your desired directory
    $original_file_name = $_FILES["job_image"]["name"];
    
    // Generate a unique file name by appending a timestamp
    $timestamp = time();
    $job_image = $timestamp . "_" . $original_file_name;
    
    $target_file = $target_directory . $job_image;

    move_uploaded_file($_FILES["job_image"]["tmp_name"], $target_file);

    // SQL query to insert data into the table
    $sql = "INSERT INTO job_posting (job_image, job_role, location, job_type, date_created, job_description, qualification)
            VALUES ('$job_image', '$job_role', '$location', '$job_type', '$date_created', '$job_description', '$qualification')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
