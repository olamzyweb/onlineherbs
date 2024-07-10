

<div class="container">
        <div class="product">
            <p><center><h1><b>Products </b></h1></center>
            <input class="prodsearch" id="search" type="search" name="searchprod"class="fa fa-search"  oninput="w3.filterHTML('#id02', '.ite', this.value)" placeholder='Search for disease/products/categories...'/>
            </p>
        <div class="row">


<?php 
        include 'connection.php';
        $sss = @$_SESSION['username'];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

        
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

    
           echo'<div id="id02">'; 
              echo'<a href="#">';
                 echo'<div class="card ite">';
                               
                     echo'<img class="card-img-top" src="images/'.$productimg.'" alt="Card image">';
                     echo'<div class="card-body">'; 
    echo'<h4 class="card-title">'.$productname.'</h4>';
   echo' <p class="card-text">'.$productdesc.' <br>'.$productcat.'</p>';
//    echo' <p class="card-text">'.$productcat.'</p>';
   echo'<a href="singleproduct.php?id='.$productname.'" class="btn btn-light">Add to cart</a>';
  echo'</div>';
  echo'</div>';
echo'</a>';
               echo'</div>';


    }
//    echo'<div class="spinner-border text-success"></div>';
    
} else {
    echo "0 results";
}
        }
        ?>
         </div>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>