<?php
session_start();
require("../db_conn.php");
$getdata2 = $_POST["Todo"];
$completed2 ="UPDATE todo_list SET Completed = '0' WHERE Todo ='" .$getdata2. "'";
if(isset($getdata2)){
    $conn->query($completed2);
};
?>