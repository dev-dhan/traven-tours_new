<?php
include("connection/connection.php");
$sql = "SELECT * FROM `travelPackage` ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
$data = [];
while ($fetch = mysqli_fetch_assoc($result)) {
    $data[] = $fetch;
}
print_r(json_encode($data));
?>