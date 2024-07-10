
<?php session_start();?>
<?php
 

$ref = $_GET['reference'];
if($ref == ""){
header("location:javascript://history.go(-1)");


}
?>

<?php
$curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" .rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_d0a2374326f1d7f63932e9ef4ca0a7894e81fb99",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
    $result = json_decode($response);
// echo $response;
// print_r($result);

  
  
  if($result->data->status == 'success'){
$status = $result->data->status;
$reference = $result->data->reference;
$buyer = @$_SESSION['username'];
$seller = @$_SESSION['sellername'];
$fullname = $lname.''.$fname;
$cus_email = $result->data->customer->email;
date_default_timezone_set('Africa/Lagos');
$date_time = date('Y.m.d h:i:sa', time());
$productname2 = @$_SESSION['productname'];
$productid2 = @$_SESSION['productid'];

include ('connection.php');


// $stmt =$conn
// ->prepare("INSERT INTO paystack (status, reference, lname, fname, fullname, email, date) VALUES (?,?,?,?,?,?,?)");
// $stmt->bind_param("sssssss", $status, $reference, $lname, $fname, $fullname, $cus_email, $date_time);
// $stmt->execute();
// if ($stmt->error){
//   echo 'There was a problem on yuor code'. mysqli_error($conn);
// }
// else {
// header("location: success.php?status=success");
// exit;
// }
// $stmt->close();


 $query = "INSERT INTO payments (status,reference,buyer,seller,fullname,email,date,productname,productid) VALUES ('$status','$reference','$buyer','$seller','$fullname','$cus_email','$date_time','$productname2','$productid2')";
 $merge = mysqli_query($conn,$query);

 if(!$merge){
    echo "<script>alert('an error occured while inserting')</script>";
 }
 else {
  echo "<script>alert('order successfully updated in database')</script>";
   header("location: success.php");
 }


}
  else {
      header("location: error.php");
exit;  
}
}
?>