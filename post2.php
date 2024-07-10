<?php 
                // include 'navbar.php';
                include 'connection.php';
                ?>
        
        
        <?php
        
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            
             $name = $_POST['name'];
             $email = $_POST['email'];
             $ema = $_POST['email'];
             $password = $_POST['psw'];
             $password2 = $_POST['psw-repeat'];
             
             $checkemail ="";
             $query = "SELECT * FROM user WHERE email = '$email'";
              $result = mysqli_query($conn, $query);
             
             
             while($row = mysqli_fetch_assoc($result)){
        $checkemail = $row['email'];
             }
             
        if($email = $checkemail ){
            echo '<br><br><div class="alert danger">
                               <span class="closebtn">&times;</span>  
                         <strong>Email already exists! Try another</strong>
                               </div>';
            // echo '<script>alert("email  already exist")</script>';
            // echo "Email already exists.Try another";
        }elseif ($password != $password2) {
            echo '<br><br><div class="alert warning">
                               <span class="closebtn">&times;</span>  
                         <strong>Passwords do not match! Try again</strong>
                               </div>'; 
            // echo '<script>alert("Passwords do not match")</script>';
            // echo "Passwords do not match.Re-enter";
        }elseif($name == ""){
            echo '<br><br><div class="alert warning">
            <span class="closebtn">&times;</span>  
      <strong>Name field empty! Fill empty values</strong>
            </div>'; 
        }elseif($password == ""){
            echo '<br><br><div class="alert warning">
            <span class="closebtn">&times;</span>  
      <strong>Email field empty! Fill empty values</strong>
            </div>'; 
        }elseif($password2 == ""){
            echo '<br><br><div class="alert warning">
            <span class="closebtn">&times;</span>  
      <strong>2Password field empty! Fill empty values</strong>
            </div>'; 
        } else {
            $query2 = "INSERT INTO user (name,email,password) VALUES('$name','$ema','$password')";
            $result2 = mysqli_query($conn, $query2);
            
            if($result2 = true){
                // echo '<script>alert("registration successful")</script>';
                echo '<br><br><div class="alert success">
                               <span class="closebtn">&times;</span>  
                         <a href="login.php"><strong style="color: white;">Signup successful! Login now</strong></a>
                               </div>';
                //    header('location:login.php');
                //    echo'<script>window.location.assign("login.php")</script>';
//                echo $ema;
//                echo $name;
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