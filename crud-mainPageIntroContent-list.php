<?php
include("connection/connection.php");
$sql = "SELECT *  FROM `introduction_content`";
$result = mysqli_query($conn, $sql);
$data = [];
while ($fetch = mysqli_fetch_assoc($result)) {
    $data[] = $fetch;
}
print_r(json_encode($data));
?>