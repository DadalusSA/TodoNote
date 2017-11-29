<?php

session_start();
require ("../db_conn.php");


  $getTodovalue = $_POST['getTodo'];
  $getUserID = $_SESSION['userid'];

  $sql = "INSERT INTO Todo_list (Todo, UserID) VALUES ('".$getTodovalue."','".$getUserID."')";

  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM Todo_list Order by id desc LIMIT 1";

  $result = $conn->query($sql2);

  $getvalue3 = $result->fetch_assoc();

echo json_encode($getvalue3);

?>