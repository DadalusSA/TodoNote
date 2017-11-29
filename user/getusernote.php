<?php
session_start();
require("../db_conn.php");


$sql = "SELECT * FROM note_list Where UserID ='". $_SESSION["userid"]."'";

$result = $conn->query($sql);

while($r = mysqli_fetch_assoc($result)){
    $json[] = $r;
}
$data["data"] = $json;
//$result = mysqli_query($conn,$sql);
//$data["rowtotal"] = $result->num_rows;
echo json_encode($data);

?>