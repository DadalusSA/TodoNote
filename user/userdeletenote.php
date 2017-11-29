<?php
session_start();
require ("../db_conn.php");

$id  = $_POST["id"];

$deletesql = "DELETE FROM note_list WHERE ID = '".$id."'";

$result = $conn->query($deletesql);

echo json_encode([$id]);

?>