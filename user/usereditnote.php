<?php
require ("../db_conn.php");

$id  = $_POST["id"];
$title = $_POST["getTitle"];
$description = $_POST["getDescription"];
$sql = "UPDATE note_list SET Title = '".$title."',Description = '".$description."'WHERE ID = '".$id."'";

$result = $conn->query($sql);

$sql1 = "SELECT * FROM note_list WHERE id = '".$id."'";

$result = $conn->query($sql1);

$data = $result->fetch_assoc();

echo json_encode($data);

?>