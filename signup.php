<?php ob_start();?>
<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>

        <meta charset="UTF-8">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" rel="stylesheet"/>
        <!-- <script src="jquery.js"></script> -->
        <!-- <script src="jquery.min.js"></script> -->
        <script src="jquery/jquery.min.js"></script>
        
    </head>
    <body>
        
        <style>
            * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
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

.alert {
  padding:  20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.9s;
  margin-bottom: 15px;
  border-radius: 9px;
  width: 400px;
  float: right;
  position: relative;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}




        </style>
        
                 <?php 
                include 'navbar.php';
                include 'connection.php';
                ?>
        
        
        
        
        


<script>
        function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

        <form id="submitform" class="was-validated" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Sign up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="email"><b>FullName</b></label>
    <input type="text" class="form-control" placeholder="Enter FullName" name="name" required />


    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <div id="result"></div>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" name="submit" id="submit" class="registerbtn">
  </div>

  <div class="container signin">
      <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

        
<script>
//         $('#submitform').submit(function (event) {
//   //  event.preventDefault();
//   .click('#submit');
//    $.ajax({
//       type: "POST",
//       url: "post2.php",
//       data: $(this).serialize(),
//        success: function (data) {
//          console.log(data);
//        $('.result').html(data);
//       }
//     });
// });
      </script>

       <script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "post2.php",
                type: "POST",
                data: $('#submitform').serialize(),
                success: function(response){
                    $("#result").html(response);
                }
            });
            return false;
        });
    });
    </script>  
        
        

        <!-- <script>

function submitFormAjax() {
    var  xmlhttp;
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else if(window.ActiveXObject){
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")

    }

    // Instantiating the request object
    xmlhttp.open("POST", "post2.php", true);
     // Defining event listener for readystatechange event
    xmlhttp.onreadystatechange = function() {
       // if (this.readyState !== "complete"){
       //    document.getElementById("response_message").innerHTML = "Loading";
       // }
        if (this.readyState === 4 && this.status === 200)
        {
            //alert(this.responseText); // Here is the response
            document.getElementById("response_message").innerHTML = this.responseText;
           // console.log(this.responseText);
        }
    }

    // Retrieving the form data
    var myForm = document.getElementById("submitform");
    var formData = new FormData(myForm);

    // Sending the request to the server
    xmlhttp.send(formData);

}




 -->

<!-- </script> -->


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

        
        
        
        
        
<?php include 'footer.php';?>
    </body>
</html>
<?php ob_end_flush();?>