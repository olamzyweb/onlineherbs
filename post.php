<?php
include 'connection.php';

        if(isset($_POST['submit'])){
            
            $email = $_POST['email'];
            $password = $_POST['psw'];
            
            
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
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
          header('location:products.php');
       
            
            
        } else {
            echo '<script>alert("an error occured")</script> ';    
        }
        
        }
        mysqli_close($conn);
        
        ?>
        