<?php 
    $conn = mysqli_connect("localhost","root","","onlineherbs");
      
     if($_SERVER["REQUEST_METHOD"] == "POST"){
         
     $name = $_POST['name'];
     $email = $_POST['email'];    
     $subject = $_POST['subject'];
     $message = $_POST['message'];
            
     if($name == ""){
        echo '<div class="container">
<div class="alert alert-danger alert-dismissible" fade show >
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Please input your name</strong>.
</div>
</div>
';
     }elseif($email == ""){
        echo '<div class="container">
<div class="alert alert-danger alert-dismissible" fade show >
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Provide a valid email</strong>.
</div>
</div>
';
     }elseif($message == ""){
        echo '<div class="container">
<div class="alert alert-danger alert-dismissible" fade show >
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Write something in the message box</strong>.
</div>
</div>
';
     }else{
     $query = "INSERT INTO messages (name,email,subject,message) VALUES('$name','$email','$subject','$message')" ;
     $merge = mysqli_query($conn, $query);       
    
     if($merge == true){
         echo '<div class="container">
<div class="alert alert-success alert-dismissible" fade show >
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Success!</strong> Message sent.
</div>
</div>
';
     } else {
         echo '
         <div class="container">
<div class="alert alert-danger alert-dismissible" fade show>
<button type="button" class="close" data-dismiss="alert" >&times;</button>
<strong>Error!</strong> Error sending message.
</div>
</div>
';
     }
     }
     }
     
    ?>