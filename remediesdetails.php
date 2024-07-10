
<?php include 'connection.php'?>
<?php 
$pid=($_GET['id']);
?>
<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>

        <meta charset="UTF-8">
        <title><?php echo $pid;?></title>
        <link href="style.css" rel="stylesheet"/>
             
    </head>
    <body>
    <style>
        /* CSS for styling the news */
        .news-container {
            width: 80%;
            margin: 0 auto;
            text-align: left;
        }

        .news-article {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .news-title {
            font-size: 20px;
            font-weight: bold;
        }

        .news-date {
            color: #888;
        }

        .news-content {
            margin-top: 10px;
        }
        /* div .text {
            overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 7; /* number of lines to show */
           /* line-clamp: 2;
   -webkit-box-orient: vertical; */
      /* } */ */
    </style>


                <?php include 'navbar.php'?>
                
        <?php
    $sss = @$_SESSION['username'];
        
        // echo $pid;
        $sl = "SELECT id, title, content, auth, date FROM remedies WHERE title='$pid' ";
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
    
    
    
    
    
    
    // Output the news article in a div card
     

//       
echo'<div  class="news-container">';
echo'<div class="news-article">';
    echo'<div class="news-title">'.$news_title.'</div>';
    echo'<div class="news-date">'.date("F j, Y", strtotime($news_date)). '&nbspBy '.$auth.'</div>';
    echo'<div class="news-content text">'.$news_description.'</div>';
    // echo '<div class="news-content"><a href="blogdetails.php?id='.$news_title .'" class="btn btn-primary stretched-link bottomright">Read More &rarr; </a></div>';
    echo'</div>';
    echo'</div>';
      echo'<br>'; 
  }
  
  } 
//   else {
//   echo "No news articles found.";
// }
        
        
        
        
        
        
        
        ?>
       
        <div class="container">

 <h1>Comments</h1>

<form method="POST" id="form" style="right: 100px;">
     <input type="hidden"  name="product_id" value="<?php echo $news_id; ?>">
    <input type="text" style="width: 300px; border-radius:6px;" name="username" value="<?php echo @$sss; ?>"  required><br><br>
    <textarea name="comment" id="comment" style="width: 300px; border-radius:6px;" placeholder="Your Comment"></textarea><br>
    <input type="submit" id="submit"  value="Post Comment">
    
    <div id="result"></div>
</form>



       
        <div id="comments">
    <!-- Comments will be displayed here -->
</div><br>
       
        </div>
        
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "commentremedy.php",
                type: "POST",
                data: $('#form').serialize(),
                success: function(response){
                    $("#result").html(response);
                    document.getElementById("comment").value = "";
                }
                
            });
            return false;
        });
    });

    </script>  
           
           <script>
document.addEventListener("scroll", function() {
    var productID = "<?php echo $news_id; ?>"; // Pass the product ID to the server
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "commentremedy2.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            document.getElementById("comments").innerHTML = response;
        }
    };
    xhr.send("product_id=" + productID);
});
</script>
 
        <?php 
        include 'footer.php';
        ?>
    </body>
</html>