<html>
  <head>
    
  </head>

  <body>
      <?php
      session_start();
$servername = "localhost";
$username = "root";
$password = "dadalus123";
$dbname = "dadaphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("rip");
}
else
{
$userid = mysqli_real_escape_string($conn,$_POST['userid']);
$userpw = mysqli_real_escape_string($conn,$_POST['userpw']);
session_start();
$sql = "Select * FROM regis Where UserID = '$userid' AND Password = '$userpw' ";

$count = mysqli_query($conn,$sql) or die (mysql_error());
$result = $count->num_rows;
if($result.count == 1)
{
    $row = mysqli_fetch_array($count);
    $_SESSION["userid"] =$row["UserID"];
    header("location: main.php");

}
else
{
    echo "<script>alert('Invalid UserID or Password'); window.location.href='mainpage.php'</script>";
}

}


      ?>
  </body>
</html>