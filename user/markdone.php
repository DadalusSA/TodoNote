<?php

session_start();

require("../db_conn.php");
$getdata = $_POST["Todo"];
$completed1 ="UPDATE todo_list SET Completed = '1' WHERE Todo ='" .$getdata. "'";
if(isset($getdata)){
    $conn->query($completed1);
};
?>