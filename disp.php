<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "onlineherbs");

$result = $conn->query("SELECT id, email FROM users");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Name":"'  . $rs["id"] . '",';
  $outp .= '"City":"'   . $rs["email"]        . '",';
  $outp .= '"Country":"'. $rs["Country"]     . '"}';
}
$outp ='{"customers":['.$outp.']}';

$conn->close();

echo($outp);
?>