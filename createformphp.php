<?php 
                // include 'navbar.php';
                include 'connection.php';
                ?>
        
        
        <?php
        
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            
             $query = "SELECT * FROM messages";
              $result = mysqli_query($conn, $query);
             
             
             while($row = mysqli_fetch_assoc($result)){
              
        
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