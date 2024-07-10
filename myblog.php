<!DOCTYPE html>
<html>
<title>Remedies</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


p{
            overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
           line-clamp: 2;
   -webkit-box-orient: vertical;
      }
</style>
<body class="w3-light-grey">





<?php include 'connection.php'?>
       



<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to Ola's world of <span class="w3-tag">tech</span></p>
</header>

<!-- Grid -->
<div class="w3-row">
<div class="w3-col l8 s12">
<?php
    $sss = @$_SESSION['username'];
    
        // echo $pid;
        $sl = "SELECT id, title, content, auth,remposter, date FROM remedies ";
        $result = mysqli_query($conn,$sl);
        if (!$result) {
            printf("error : %s/n", mysqli_error($conn));
            exit();
        }else{
            while ($row=mysqli_fetch_array($result)) {
                



        // Retrieve news articles from the database1
// $sql = "SELECT id, title, content, date, auth FROM remedies ORDER BY date DESC ";
// $result = mysqli_query($conn,$sql);



// if ($result->num_rows > 0) {
//   // Output each news article in a div card
//   while($row = mysqli_fetch_array($result)) {
    $news_id = $row["id"];
    $news_title = $row["title"];
    $news_description = $row["content"];
    $newsimage = $row["remposter"];
    $news_date = $row["date"];
    $auth = $row["auth"];
    

    

 

    ?>
<!-- Blog entries -->

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/<?php echo $newsimage;?>" alt="<?php echo $newsimage;?>" style="width:100%; height:300px;">
    <div class="w3-container">
      <h3><b><?php echo $news_title;?></b></h3>
      <h5><span class="w3-opacity"><?php echo $news_date;?></span></h5>
    </div>

    <div class="w3-container">
      <p class="text"><?php echo $news_description;?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="remediesdetails.php?id=<?php echo $news_title;?>"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
<?php }}

 ?>
  <!-- Blog entry -->
  <!-- <div class="w3-card-4 w3-margin w3-white">
  <img src="../w3images/bridge.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>BLOG ENTRY</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div> -->
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/img3.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Olanrewaju Olamide</b></h4>
      <h6>Just me, myself and I, exploring the universe of technology. I have a heart of love and a interest in tech. I want to share my world with you.</h6>
    </div>
  </div><hr>
  











  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">

    <?php
    $sss = @$_SESSION['username'];
    
        // echo $pid;
        $sl = "SELECT id, title, content, auth, date FROM remedies ";
        $result = mysqli_query($conn,$sl);
        if (!$result) {
            printf("error : %s/n", mysqli_error($conn));
            exit();
        }else{
            while ($row=mysqli_fetch_array($result)) {
                



        // Retrieve news articles from the database1
// $sql = "SELECT id, title, content, date, auth FROM remedies ORDER BY date DESC ";
// $result = mysqli_query($conn,$sql);



// if ($result->num_rows > 0) {
//   // Output each news article in a div card
//   while($row = mysqli_fetch_array($result)) {
    $news_id = $row["id"];
    $news_title = $row["title"];
    $news_description = $row["content"];
    // $news_image_url = $row["image_url"];
    $news_date = $row["date"];
    $auth = $row["auth"];
    

    

 

    ?>


      <li class="w3-padding-16">
        <img src="images/img2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php echo $news_title;?></span><br>
        <span><?php echo $news_date;?></span>
      </li>

      <?php }}?>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="default.html" target="_blank">OLAMZYWEB</a></p>
</footer>

</body>


</html>
