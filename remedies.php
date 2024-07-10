<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" rel="stylesheet"/>
        <?php include 'bootstraparrangement.php';?>     
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
        div .text {
            overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 7; /* number of lines to show */
           line-clamp: 2;
   -webkit-box-orient: vertical;
      }
    </style>


                <?php include 'navbar.php'?>
                <?php include 'connection.php'?>
        <?php
        
        // Retrieve news articles from the database1
$sql = "SELECT id, title, content, date, auth FROM remedies ORDER BY date DESC ";
$result = mysqli_query($conn,$sql);



if ($result->num_rows > 0) {
  // Output each news article in a div card
  while($row = mysqli_fetch_array($result)) {
    $news_id = $row["id"];
    $news_title = $row["title"];
    $news_description = $row["content"];
    // $news_image_url = $row["image_url"];
    $news_date = $row["date"];
    $auth = $row["auth"];
    
    $ss = 'Read More &rarr';
    
    
    
    
    // Output the news article in a div card
     

//       
echo'<div class="news-container">';
echo'<div class="news-article">';
    echo'<div class="news-title">'.$news_title.'</div>';
    echo'<div class="news-date">'.date("F j, Y", strtotime($news_date)). '&nbspBy '.$auth.'</div>';
    echo'<div class="news-content text">'.$news_description.'</div>';
    echo '<a href="remediesdetails.php?id='.$news_title.'" class="btn btn-primary bottomright">'.$ss. '</a>';
    echo'</div>';
    echo'</div>';
      echo'<br>'; 
  }
  
  } else {
  echo "No news articles found.";
}
        
    
        
        ?>
       
        
        
        
        
        
        
 
        <?php 
        include 'footer.php';
        ?>
    </body>
</html>