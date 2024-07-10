<?php 
ob_start();
//session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>

        <meta charset="UTF-8">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" rel="stylesheet"/>

        <script src='jquery-3.1.1.min.js' type='text/javascript'></script>

<!-- jQuery UI -->
 
<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
<script src='jquery-ui.min.js' type='text/javascript'></script>
    <meta charset="utf-8">
    <!--Boostrap & family-->
<!--<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    </head>
    <body>
        <style>
            * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
        </style>
        
                <?php include 'navbar.php';
                 include 'connection.php';
                ?>
        
       <?php
        if(isset($_POST['submit'])){
            
            $email = $_POST['email'];
            $password = $_POST['psw'];
            
            
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND admin = '1' ";
            @$result = mysqli_query($conn, $query);
            
             $email_result = "";
             $usernam = "";
     $pass_result = "";
     
     
    while($row = mysqli_fetch_assoc($result)){
        $usernam = $row['name'];
        $email_result = $row['email'];
    $pass_result = $row['password'];
              
    }
    
    if($email_result == $email && $pass_result == $password){
         $_SESSION['username'] = $usernam;
          $_SESSION['email'] = $email;
          $_SESSION['pass'] = $password;
          header('location:dashboard.php');
       
            
            
        } else {
            echo '<script>alert("Invalid name or password")</script> ';    
        }
        
        }
        mysqli_close($conn);
        
        ?> 
        
<script>

// $(document).ready(function(){
// $("#submit").click(function(){
//         // $('#submitform').submit(function (event) {
//    event.preventDefault();
//   // .click('#submit');
//    $.ajax({
//       type: "POST",
//       url: "post.php",
//       data: $(this).serialize(),
//        success: function (data) {
//          console.log(data);
//        $('.result').html(data);
//       }
//     });
// });
// });
      </script>  
        
        <form action="adminlogin.php" id="submitform" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Admin Login</h1>
    <!--<p>Please fill in this form to create an account.</p>-->
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    

    <!--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->
    <button type="submit" name="submit" id="submit" class="registerbtn">Login</button>
  </div>

  <div class="container signin">
      <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>
  </div>
</form>

        <div class="result text-center"></div>
<?php include 'footer.php';?>
    </body>
</html>
<?php ob_end_flush();?>