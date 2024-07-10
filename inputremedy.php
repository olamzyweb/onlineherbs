<!DOCTYPE html>
<html>
<title>Create remedy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>


<?php 

include 'connection.php';

if(isset($_POST['submit'])){
  // echo "olamzyweb is the best";
$remtitle = $_POST['remtit'];
$remcat = $_POST['remcat'];
// $remimg = $_POST['remimg'];
// $remposter = $_POST['remposter'];
@$author = $_POST['authq'];
$remtag = $_POST['remtag'];
$remedycontent = $_POST['remedy'];









$name = $_FILES['remposter']['name'];
$target_dir = "images/"; //this is the directory to upload to
//get_file name and set to target directory
$target_file = @($target_dir . basename($_FILES["remposter"]["name"]));
@($getfile_name = $_FILES['remposter']['name']);
@($getfile_size = $_FILES['remposter']['size']);
@($getfile_tmp_dir = $_FILES['remposter']['tmp_name']);
@($getfile_type = $_FILES['remposter']['type']);
@($identifyFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));


if($getfile_size < "600000 bytes" ){
if($identifyFileType=="jpg" || $identifyFileType=="png"){
move_uploaded_file($_FILES["remposter"]["tmp_name"], $target_file);

echo "<script> alert('$getfile_name has been uploaded');</script>";


$name2 = $_FILES['remimg']['name'];
$target_dir2 = "images/"; //this is the directory to upload to
//get_file name and set to target directory
$target_file2 = @($target_dir . basename($_FILES["filetoupload"]["name"]));
@($getfile_name2 = $_FILES['remimg']['name']);
@($getfile_size2 = $_FILES['remimg']['size']);
@($getfile_tmp_dir2 = $_FILES['remimg']['tmp_name']);
@($getfile_type2 = $_FILES['remimg']['type']);
@($identifyFileType2 = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));


if($getfile_size2 < "600000 bytes" ){
if($identifyFileType2=="jpg" || $identifyFileType2=="png"){
move_uploaded_file($_FILES["remimg"]["tmp_name"], $target_file);

echo "<script> alert('$getfile_name2 has been uploaded');</script>";






  $query2 = "INSERT INTO remedies (title,content,auth,remcategory,remtag,remimg,remposter) VALUES('$remtitle','$remedycontent','$author','$remcat','$remtag','".$name."','".$name2."')";
  $result2 = mysqli_query($conn, $query2);
  
  if($result2 = true){
      // echo '<script>alert("registration successful")</script>';
      echo '<br><br><div class="alert success">
                     <span class="closebtn">&times;</span>  
               <strong>Product created successfully!</strong>
                     </div>';
      //    header('location:login.php');
      //    echo'<script>window.location.assign("login.php")</script>';
//                echo $ema;
//                echo $name;
  }


 }else {
   echo "<script> alert('please upload an image with a jpg or png format '); </script>";  
}    
} else {
   echo "<script> alert('$getfile_name2 is above 600kb. please upload an image less than 60 kb'); </script>";  
} 
  
}else {
  echo "<script> alert('please upload an image with a jpg or png format '); </script>";  
}    
} else {
  echo "<script> alert('$getfile_name is above 600kb. please upload an image less than 60 kb'); </script>";  
} 

}












?>









<form action="inputremedy.php" method="POST" enctype="multipart/form-data" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Create remedy</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="remtit" type="text" placeholder="Remedy title">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="remcat" type="text" placeholder="Remedy category">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="authq" type="text" placeholder="Author">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="remedy" type="text" placeholder="remedy here">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="remtag" type="text" placeholder="remedy disease/tags">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
  Remedy poster   
  <div class="w3-rest">
      <input class="w3-input w3-border" name="remposter" type="file" placeholder="remedy poster">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
  Remedy img   
  <div class="w3-rest">
      <input class="w3-input w3-border" name="remimg" type="file" placeholder="remedy poster">
    </div>
</div>

<input type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="submit">Send

</form>

</body>
</html> 
