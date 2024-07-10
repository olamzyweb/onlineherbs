<?php session_start();?>
<!DOCTYPE html>
<?php 

$sss = @$_SESSION['username'];

?>
<div>
<nav class="navbar navbar-expand-md  ">
    <a class="navbar-brand" href="#"><b>HERBS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    
      <svg height="49" id="IconChangeColor" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="49" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" id="mainIconPathAttribute" fill="#ffffff"></path></svg>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="remedies.php">Remedies</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li> 
     
<!--       <li class="nav-item">
         <a class="nav-link" href="login.php"></a>
      </li> -->
       <!-- Dropdown -->
     <li class="nav-item">
         <a class="nav-link" href="login.php">Login</a>
      </li> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li class="nav-item buy-tickets" onclick="myFunction()" class="dropdown dropdown-toggle" data-toggle="dropdown"">
 
    <a class="nav-link" >
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25"  fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
            
            <?php echo @$sss?></a>
            
      </li>
      
    </ul>
  </div>  
</nav>
<!--<br>-->



<!-- <ul>
            <li><b>HERBS</b></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown dropdown-toggle" data-toggle="dropdown"><a href=".php">Signup</a>
            
            <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
            
            
            
            </li>
</ul>-->

<!--<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
</div>-->
</div>
<script>
function myFunction() {
  var txt;
  if (confirm("Are you sure you want to Logout!")) {
    window.location.assign("logout.php")
  } else {
    txt = "You pressed Cancel!";
  }
  // document.getElementById("demo").innerHTML = txt;
}
</script>
