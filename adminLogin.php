<?php
session_start();
include("connection/connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

echo "$username";
echo "$password";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    echo "result";
    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['username'] = $username;
        header('Location: adminDashboardV2.php'); // Redirect to a welcome page
    } else {
        // Login failed
        header('Location: admin.php?error=Incorect User name or password');
    }
} else {
    header('Location: admin.php');
}
echo "resultout";

mysqli_close($conn);
?>