<?php
include("connection/connection.php");
$id = $_GET['id'];
$sql = "SELECT *  FROM `team_content`  WHERE  `id` =   $id";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_assoc($result);
print_r(json_encode($fetch));
?>