
<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>
       
        <meta charset="UTF-8">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" rel="stylesheet"/>
             
    </head>
    <body ononline="onFunction()" onoffline="offFunction()">
       <!--<div class="container">-->
        <?php include 'navbar.php'?>
       <?php $ses = @$_SESSION['username'];
       ?>
        <!--carousel begins here-->
        <div id="demo" class="carousel slide" data-ride="carousel">

  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/img1.jpg" alt="" width="100%" height="470px">
    </div>
    <div class="carousel-item">
        <img src="images/img3.jpg" alt="" width="100%" height="470px">
    </div>
    <div class="carousel-item">
        <img src="images/img4.jpg" alt="New York" width="100%" height="470px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
        <br><br>
        <div class="jumbotron">
        <div>
        <img src="images/img10.jpg" alt="abtimg" style="float:left; padding-top: 30px; padding-bottom: 30px; padding-right: 30px; border-radius:10px; width:300px; height:300px;"/>
        </div>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <h1><b>ABOUT US</b></h1>
            <h4>
Welcome to  Herbs, where creativity meets innovation in the world of tradomedicals. We are passionate about crafting exceptional digital experiences that leave a lasting impact. With a blend of artistic vision, technical expertise, and a client-first approach, we bring your web design dreams to life.
</h4>
        </div>
        
       
            <div class="jumbotron">
        <div class="product">
            <p><center><h1><b>Products</b></h1></center></p>
        <div class="row">
<!--            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
            <div class="col-sm-4">
                 <div class="card" >
                     <img class="card-img-top" src="images/img3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">CBD Tea</h4>
    <p class="card-text">Works for all types of blood diseases.</p>
    <a href="products.php" class="btn btn-light">View more!!!</a>
  </div>
</div>
                
                
            </div>
            
            
            <div class="col-sm-4">
                 <div class="card" >
  <img class="card-img-top" src="images/img7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Scent leaf</h4>
    <p class="card-text" >Good for body cleansing and can be added to food.</p>
    <a href="products.php" class="btn btn-light">View more!!!</a>
  </div>
</div>
            </div>
            
            <div class="col-sm-4">                
                 <div class="card" >
  <img class="card-img-top"  src="images/img8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dandelion root Tea</h4>
    <p class="card-text">Free from caffeine and cleanses body.</p>
    <a href="products.php" class="btn btn-light">View more!!!</a>
  </div>
</div>
            </div>
</div>
        </div>
        
        </div>
        
<div class="jumbotron">
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides">
    <q>I love your herbal products they worked well in time.</q>
    <p class="author">- Olanrewaju Oladunni</p>
  </div>

  <div class="mySlides">
    <q>Your products are extraordinarily amazing.</q>
    <p class="author">Abioye Fagbamila</p>
  </div>

  <div class="mySlides">
    <q>I've just found the best products that works well.</q>
    <p class="author">Awolowo Olabisi</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>

<!-- this is javascript for slide show -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<!-- this is the ending of testimonial -->



 <!-- ======= Contact Section ======= -->
 <section id="contact" class="section-bg">

<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Contact Us</h2>
    <p>We are always available.</p>
  </div>

  <div class="row contact-info">

    <div class="col-md-4">
      <div class="contact-address">
        <i class="ion-ios-location-outline"></i>
        <h3>Address</h3>
        <address>55,Isiba Street, Egbeda Lagos, Nigeria</address>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-phone">
        <i class="ion-ios-telephone-outline"></i>
        <h3>Phone Number</h3>
        <p><a href="tel:+2348188435281">+234 81 8843 5281</a></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-email">
        <i class="ion-ios-email-outline"></i>
        <h3>Email</h3>
        <p><a href="mailto:horlameedayolanrewaju@gmail.com">horlameedayolanrewaju@gmail.com</a></p>
      </div>
    </div>

  </div>

    
    <!--this is php for the form below-->
    <!-- <?php 
//     $conn = mysqli_connect("localhost","root","","onlineherbs");
      
//      if(isset($_POST['submit'])){
         
//      $name = $_POST['name'];
//      $email = $_POST['email'];    
//      $subject = $_POST['subject'];
//      $message = $_POST['message'];
            
     
//      $query = "INSERT INTO messages (name,email,subject,message) VALUES('$name','$email','$subject','$message')" ;
//      $merge = mysqli_query($conn, $query);       
    
//      if($merge == true){
//          echo '<div class="container">
// <div class="alert alert-success alert-dismissible" fade show >
// <button type="button" class="close" data-dismiss="alert">&times;</button>
// <strong>Success!</strong> Message sent.
// </div>
// </div>
// ';
//      } else {
//          echo '
//          <div class="container">
// <div class="alert alert-danger alert-dismissible" fade show>
// <button type="button" class="close" data-dismiss="alert" >&times;</button>
// <strong>Error!</strong> Error sending message.
// </div>
// </div>
// ';
//      }
//      }
    
     
    ?> -->
    
    
    
  
    
    
    
    
    
    
    
  <div class="form">
      <form  id="contactform" method="post" role="form"  class="was-validated">
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
          <div class="valid-feedback">Filled correctly</div>
           <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group col-md-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
          <div class="valid-feedback">Filled correctly</div>
           <div class="invalid-feedback">Invalid email.</div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
        <div class="validate"></div>
      </div>
      <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required="fff"></textarea>
        <div class="validate"></div>
      </div>
           <div class="mb-3">
        <!-- <div class="loading">Loading</div> -->
        <!-- <div class="error-message"></div> -->
        <!-- <div class="sent-message" id="result">Your message has been sent. Thank you!</div> -->
      </div>
<div class="text-center">
<!--<input type="submit" name="submit" value="submit"/>-->
<div id="result"></div>
<button type="submit" name="submit" id="submit" style="background-image: linear-gradient(to bottom right, #69bb8a,#4dad85,#3c7d5c);; color: white;border: 0px; border-radius: 20px; height: 50px;">Send Message</button>
</div>
    </form>
  </div>

</div>       
</section><!-- End Contact Section -->








<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "contact.php",
                type: "POST",
                data: $('#contactform').serialize(),
                success: function(response){
                    $("#result").html(response);
                }
            });
            return false;
        });
    });
    </script>  
        

















        
        <br><br>



<!--        <div class="footer">
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" width="300px" class="input"><br>
                    Suscribe to our newsletter
                    <h1><b class="foottext">HER</b><b class="foottext2">BS</b></h1>
                    
                </div>
  <div class="col">
      <h6 class>INFORMATION</h6>
  </div>
  <div class="col">INSTAGRAM
  </div>
</div>
            
            
            
            
            
        </div>-->
<!--<p id="demo"></p>-->

<script>
    var x = + navigator.onLine;
//      document.getElementById("demo").innerHTML = x;
//    if(x = false){
//      alert ("Your browser is working offline.");  
//    }else{
//  alert ("Your browser is working online.");
//}


</script>


        <?php
        //this is the footer of the page
include 'footer.php';        
        ?>
        <!--</div>-->
    </body>
</html>
