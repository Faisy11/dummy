<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vb_project";

$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"SELECT * FROM items");
$data = array();
$summa = 00;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>
