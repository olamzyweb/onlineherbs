<?php 

$conn = new mysqli('localhost', 'root', '', 'onlineherbs');
// Check connection
if (!$conn) {
   echo "not connected" . mysqli_error($conn);
}
?>