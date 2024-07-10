<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';
        include 'connection.php';
        ?>

        <meta charset="UTF-8">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <script src="w3.js"></script>   
        <script src="w3.css"></script> 
    </head>
    <body>
                <?php include 'navbar.php'?>
        <?php $sss = @$_SESSION['username'];?>
        <script>
        window.addEventListener('load', function() {
 document.querySelector('input[type="file"]').addEventListener('change', function() {
              if (this.files && this.files[0]) {
               var img = document.getElementById('my_image');  // $('img')[0]
               var fi = document.getElementById('filetoupload'); 
               
            //   Calculate File Size to know what to upload         
                   if (fi.files.length > 0) { 
                   for (const i = 0; i <= fi.files.length - 1; i++) { 
                       const fsize = fi.files.item(i).size; 
                       const file = Math.round((fsize / 1000)); 
                       // The size of the file. 
                       if (file > 3000) { 
                           alert( 
         "Image too large, please resize image to 100kb. Your current image size is: "+file/1000+"mb ("+file+"kb). Image should be: Horizontal = 400px by Vertical = 300px."); 

                                return false;                
                       }  else {
       //        LOAD IMAGE            
                      img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                      img.onload = imageIsLoaded;
                       }
                   } 
               }
            }
        });
     });
     </script>   






<?php
        
        if(isset($_POST['submit'])){
           
            $productname = $_POST['productname'];
            $productid = $_POST['productid'];
            $productcat = $_POST['productcat'];
            $productprice = $_POST['productprice'];
            $productdesc = $_POST['productdesc'];
            @$productimg = $_POST['filetoupload'];
            $productnum = $_POST['productnum'];
            $productavailable = $_POST['productavailable'];
            $selleremail = $_POST['selleremail'];
            $sellercont = $_POST['sellercontact'];
            $sellername = $_POST['sellername'];
           echo $productimg;
            
            $checkproduct ="";
            $query = "SELECT * FROM products WHERE product_id = '$productid'";
             $result = mysqli_query($conn, $query);
            
            
            while($row = mysqli_fetch_assoc($result)){
       $checkproduct = $row['product_id'];
            }
            
       if($productid == $checkproduct ){
           echo '<br><br><div class="alert danger">
                              <span class="closebtn">&times;</span>  
                        <strong>product with productid  already exists! Try another</strong>
                              </div>';
           // echo '<script>alert("email  already exist")</script>';
           // echo "Email already exists.Try another";
      
       } else {



         $name = $_FILES['filetoupload']['name'];
         $target_dir = "images/"; //this is the directory to upload to
//get_file name and set to target directory
$target_file = @($target_dir . basename($_FILES["filetoupload"]["name"]));
@($getfile_name = $_FILES['filetoupload']['name']);
@($getfile_size = $_FILES['filetoupload']['size']);
@($getfile_tmp_dir = $_FILES['filetoupload']['tmp_name']);
@($getfile_type = $_FILES['filetoupload']['type']);
@($identifyFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));

       
     if($getfile_size < "60000 bytes" ){
   if($identifyFileType=="jpg" || $identifyFileType=="png"){
   move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);
     
   echo "<script> alert('$getfile_name has been uploaded');</script>";
   

   
 




           $query2 = "INSERT INTO products (product_name,product_cat,product_id,product_desc,product_available,product_img,product_num,sellercont,sellername,selleremail,product_price) VALUES('$productname','$productcat','$productid','$productdesc','$productavailable','".$name."','$productnum','$sellercont','$sellername','$selleremail','$productprice')";
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
            echo "<script> alert('$getfile_name is above 60kb. please upload an image less than 60 kb'); </script>";  
         } 
           
       }
      }
    
       
           mysqli_close($conn);
           
//            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
//            @$result = mysqli_query($conn, $query);
       ?>





<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
 close[i].onclick = function(){
   var div = this.parentElement;
   div.style.opacity = "0";
   setTimeout(function(){ div.style.display = "none"; }, 600);
 }
}
</script>













        
            <div class="container">



        <div class="container">
  <h2>Input product</h2>
  <form action="create.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">

  <div style="width: 100px; height: 100px;">
                 <img src="#" alt="click on choose file below to load image" width="100px" height="100px" style="border: 4px #990000 solid; " id="my_image"/>
           </div>
         <br>
            <input type="file" name="filetoupload" id="filetoupload"  value="choose image"/> <br>
         <br>

         <!-- <input type="file" name="filetouploa" id="filetoupload"  value="choose image"/> <br> -->
         <br>
    <div class="form-group">
      <label for="Productname">Productname:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter product name" name="productname" required>
    </div>
    <div class="form-group">
      <label for="Productprice">Productprice:</label>
      <input type="number" class="form-control"  placeholder="Enter price of product " name="productprice" required>
    </div> 
    <div class="form-group">
      <label for="Productcat">Productcat:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter product category" name="productcat" required>
    </div>
    <div class="form-group">
      <label for="Productid">Productid:</label>
      <input type="text" class="form-control"  placeholder="Enter product id" name="productid"required>
    </div>
    <div class="form-group">
      <label for="Productdesc">Productdesc:</label>
      <input type="text" class="form-control"  placeholder="Enter product description" name="productdesc" required>
    </div>
    <!-- <div class="form-group">
      <label for="Productimg">Productimg:</label>
      <input type="text" class="form-control"  placeholder="Enter product image url" name="productimg" required>
    </div> -->
    <div class="form-group">
      <label for="Productavailable">Productavailable:</label>
      <input type="text" class="form-control"  placeholder="fill in yes or no" name="productavailable" required>
    </div>
    <div class="form-group">
      <label for="Productnum">Productnum:</label>
      <input type="number" class="form-control"  placeholder="Enter amount of product available" name="productnum" required>
    </div> 
    <div class="form-group">
      <label for="sellercontact">sellercontact:</label>
      <input type="tel" class="form-control"  placeholder="Enter seller contact" name="sellercontact" required>
    </div>
    <div class="form-group">
      <label for="Productavailable">sellername:</label>
      <input type="text" class="form-control"  placeholder="Enter sellername" name="sellername" required>
    </div>
    <div class="form-group">
      <label for="selleremail">selleremail:</label>
      <input type="email" class="form-control"  placeholder="seller email" name="selleremail" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Click to validate
      </label>
    </div>
    <div id="result"></div>
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>
  
</div>

        </div>
        <!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "createformphp.php",
                type: "POST",
                data: $('#form1').serialize(),
                success: function(response){
                    $("#result").html(response);
                }
            });
            return false;
        });
    });
    </script>   -->
</body>
</html>