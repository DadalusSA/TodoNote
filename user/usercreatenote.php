<?php

session_start();
require ("../db_conn.php");


$getTitle = $_POST['getTitle'];
$getDescription = $_POST['getDescription'];
$getUserID = $_SESSION['userid'];

$sql = "INSERT INTO note_list (Title, UserID, Description) VALUES ('".$getTitle."','".$getUserID."','".$getDescription."')";

$result = $conn->query($sql);

$sql2 = "SELECT * FROM Todo_list Order by id desc LIMIT 1";

$result = $conn->query($sql2);

$getvalue4 = $result->fetch_assoc();

echo json_encode($getvalue4);

?>