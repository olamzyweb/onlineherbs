<!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HERBS AND REMEDY</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <script src="w3.js"></script>   
        <script src="w3.css"></script> 
    </head>
    <body>
        <style>
/* .container {
    display: flex;
    flex-wrap: wrap;
}
.item {
    flex-grow: 1;
    flex-basis: 200;
} */

        </style>
                <?php include 'navbar.php'?>
        <?php $sss = @$_SESSION['username'];?>
        
        
        
        <div class="container">
        <div class="product">
            <!-- <p><center><h1><b>Products </b></h1></center> --></br>
            <input class="prodsearch" id="search" type="search" name="searchprod"class="fa fa-search"  oninput="w3.filterHTML('#id02', '.ite', this.value)" placeholder='Search for disease/products/categories...'/>
            </p>
        <div class="row">
        
           <?php 
        include 'connection.php';
        $sss = @$_SESSION['username'];
        
        $query = "SELECT * FROM products";
        $query2 = "SELECT * FROM products WHERE product_cat='herbs' ORDER BY id DESC LIMIT 3";
        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $query2);

        
        
        if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_array()) {
    $productname = $row["product_name"];
    $productdesc = $row["product_desc"];
    $productimg = $row["product_img"];
    $productcat = $row["product_cat"];
    $productprice = $row["product_price"];

    
           echo'<div id="id02">'; 
              echo'<a href="#">';
                 echo'<div class="card ite item">';
                               
                     echo'<img class="card-img-top" src="images/'.$productimg.'" alt="Card image">';
                     echo'<div class="card-body">'; 
    echo'<h5 class="card-title">'.$productname.'&nbspNGN'.$productprice.'</h5>';
   echo' <p class="card-text">'.$productdesc.' <br><b>Category : </b>'.$productcat.'</p>';
//    echo' <p class="card-text">'.$productcat.'</p>';
   echo'<a href="singleproduct.php?id='.$productname.'" class="btn btn-light">Buy now!!!</a>';
  echo'</div>';
  echo'</div>';
echo'</a>';
               echo'</div>';


    }
//    echo'<div class="spinner-border text-success"></div>';
    
} else {
    echo "0 results";
}
        ?>
        
        </div>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
        
        
        
        <div class="row">
        <?php
        
        
//         if (mysqli_num_rows($result2) > 0) {
//    // output data of each row
//    while($row2 = $result2->fetch_array()) {
//    $ola2 = $row2["product_name"];
//    
//
//            echo'<div class="col-sm-4">'; 
//                 echo'<div class="card" >';
//                 
//                     echo'<img class="card-img-top" src="images/img3.jpg" alt="Card image">';
//  echo'<div class="card-body">';
//    echo'<h4 class="card-title">'.$ola2.'</h4>';
//   echo' <p class="card-text">Works for all types of blood diseases.</p>';
//    echo'<a href="#" class="btn btn-light">Order now!!!</a>';
//  echo'</div>';
//echo'</div>';
//                echo'</div>';
//
//
//
//    }
////    echo'<div class="spinner-border text-success"></div>';
//    
//} else {
//    echo "0 results";
//}
mysqli_close($conn);
        
        
        
        
        ?>
        </div>
        </div>
     
       
    </body>
    <?php 
        include 'footer.php';
        ?>
</html>