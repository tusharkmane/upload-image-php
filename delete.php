

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u-i";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['tbl_image_id']) && is_numeric($_GET['tbl_image_id']))
{
$tbl_image_id = $_GET['tbl_image_id'];

echo $tbl_image_id;


// Attempt delete query execution
$sql = "DELETE FROM tbl_image WHERE tbl_image_id='$tbl_image_id'";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
header("Location: index.php");
}
else

{
header("Location: index.php");
}
?>