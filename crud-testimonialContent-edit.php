<?php
include("connection/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title_content = $_POST["title_content"];
    $description_content = $_POST["description_content"];
    $name_content = $_POST["name_content"];
    $jobTitle_content = $_POST["jobTitle_content"];

    $id = $_POST['id'];

    $sql = "UPDATE `testimonial_content` SET `title_content` = '$title_content', `description_content` = '$description_content', `name_content` = '$name_content', `jobTitle_content` = '$jobTitle_content' WHERE `id` = $id";

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
