<?php
$servername = "localhost";
$username = "root";
$password = "8168627861";
$dbname = "2017_data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} else {
    echo 'On Board';
}
$id = $_GET['term'];
$sql = "SELECT * FROM book_table WHERE book_title like '%".$id."%' AND status= 1";
$result = $conn->query($sql);

$getdata = array();
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
     //$data['id'] = $row['id'];
     $data['value'] = $row['book_title'];
 array_push($getdata, $data);
 }
} 
//$conn->close();
echo json_encode($getdata);
