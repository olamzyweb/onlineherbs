
<?php 
include 'connection.php';
 $pid=@$_GET['id'];
 ?>
 <!DOCTYPE html>
<html>
    
    <head>
        <?php include 'bootstraparrangement.php';?>

        <meta charset="UTF-8">
        <meta name='description' content= $pid>
        <title><?php echo $pid;?></title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <script src="w3.js"></script>   
        <script src="w3.css"></script> 
    </head>
    <body>
                <?php include 'navbar.php'?>
        <?php $sss = @$_SESSION['username'];
               $useremail = @$_SESSION['email'];
               if($sss == ""){
                // header('location: login.php');
            echo '<script>alert("Please login first")</script>';
            echo'<script>window.location.assign("login.php")</script>';
               } else{
              echo' ';
               }
        ?>
        
        
        
        <div class="container">
        <div class="product">
            <p><center><h1><b>Products </b></h1></center>
            <input class="prodsearch" id="search" type="search" name="searchprod"class="fa fa-search"  oninput="w3.filterHTML('#id02', '.ite', this.value)" placeholder='Search for products/categories...'/>
            </p>
        <div class="row">
        <div class="col">
           <?php 
        // include 'connection.php';
        $sss = @$_SESSION['username'];
       
        $query2 = "SELECT * FROM products";
        $query = "SELECT * FROM products WHERE product_name = '$pid' ORDER BY id DESC LIMIT 3";
        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $query2);

        if ($pid == ""){
            echo "nothing here for  now go back to product page";
        }elseif (!$result) {
            printf("error : %s/n", mysqli_error($conn));
            exit();
        }else{
            while ($row=mysqli_fetch_array($result)) {


        // if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = $result->fetch_array()) {
    $productname = $row["product_name"];
    $productdesc = $row["product_desc"];
    $productimg = $row["product_img"];
    $productprice = $row["product_price"];
    $productcat = $row["product_cat"];
    $sellercontact = $row["sellercont"];
    $sellername = $row["sellername"];
    $productavailable = $row["product_available"];
    $productnum = $row["product_num"];
    $productid = $row["product_id"];
    $selleremail = $row["selleremail"];

     @$_SESSION['productname'] = $productname;
     @$_SESSION['productid'] = $productid ;         
     @$_SESSION['sellername'] = $sellername ;
  }
           echo'<div id="id02">'; 
            //   echo'<a href="#">';
                 echo'<div class="card ite" style=" height:100%; width:500px;">';
                               
                     echo'<img class="card-img-top" style=" height:300px;" src="images/'.@$productimg.'" alt="Product image">';
                     echo'<div class="card-body">'; 
    echo'<h4 class="card-title">'.@$productname.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNGN'.@$productprice.'</h4>';
   echo' <p class="card-text"><b>Product Description: </b>'.@$productdesc.' <br><b>Product Category: </b>'.@$productcat.'</p>';
   echo'<b> Seller Info</b>';echo'<p class="card-text"><b>Seller name: </b>' .@$sellername.'<br><b>Phone no: </b>' .@$sellercontact. '</p>';
//    echo' <p class="card-text">'.$productcat.'</p>';
  //  echo'<button name="add" id="clk" onclick="myFunction()"  class="btn btn-light" data-toggle="modal" data-target="#myModal">Add to cart</button>';
   echo '<a href="https://wa.me/234' . $sellercontact . '?text=Hello%20I%20want%20make%20enquires%20on%20'.$productname.'%20in category '.$productcat.'" class="btn btn-light">Contact seller</a>';
  echo ' <form  method="post" name="submitfor" id="submitfor">
        <input type="text" name="product_id" value="'.$productid.'" hidden>
        <input type="text" name="product_name" value="'.$productname.'" hidden>
        <input type="text" name="product_price" value="'.$productprice.'" hidden>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1">
        <button id="submi" type="submit"  class="btn btn-light">Add to Cart</button>
    </form>';
    echo'<div id="result"></div>';
   echo'</div>';
  echo'</div>';

               echo'</div>';
        }

        // }
//    echo'<div class="spinner-border text-success"></div>';
    
// } else {
//     echo "0 results";
// }

if(isset($_POST['add'])){

    // $msg = $productname $productdesc $productcat;
    $mail = mail($selleremail,$productname,$msg);
    echo '<br><br><div class="alert success">
            <span class="closebtn">&times;</span>  
            <strong>Item successfully added to cart!</strong> 
          </div>';



}


        ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#submi').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "addcart.php",
                type: "POST",
                data: $('#submitfor').serialize(),
                success: function(response){
                    $("#result").html(response);
                }
            });
            return false;
        });
    });
    </script>  

        <script>
function myFunction() {
//   alert('successfully added to cart');
  <?php echo "susce";?>
}
</script>
        
       
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<!-- <div class="col">
<div class="card ite" style=" height:100%; width:500px;">
<input type="text" name="product" value="" readonly />
hduyuyfeufy
</div>
        </div> -->
</div>
        </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Proceed to Pay</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label><br>
    <input type="email" id="email-address" required value="<?php echo $useremail?>"/>
  </div>
  <div class="form-group">
    <label for="amount">Amount</label><br>
    <input type="tel" id="amount" value="<?php echo $productprice?>" required readonly/>
  </div>
  <div class="form-group">
    <label for="first-name">Buyer Name</label><br>
    <input type="text" id="first-name" value="<?php echo $sss?>"  required />
  </div>
  <div class="form-group">
    <label for="last-name">Seller Name</label><br>
    <input type="text" id="last-name" value="<?php echo $sellername?>" required readonly/>
  </div>
  <div class="form-group">
    <label for="last-name">Product Name</label><br>
    <input type="text" id="product-name" value="<?php echo $productname?>" required readonly/>
  </div>
  <div class="form-group">
    <label for="last-name">Product id</label><br>
    <input type="text" id="product-id" value="<?php echo $productid?>"required readonly/>
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()" class="btn btn-success"> Pay </button>
  </div>
</form>

<script src="https://js.paystack.co/v1/inline.js"></script>


<script>

const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_b7d97f5bd5a42fedff6dd0caa52d7d806f152c53', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    // currency:"USD",
   // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location = "singleproduct.php?transaction=cancel";
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Copy Reference Id: ' + response.reference;
      alert(message);
   window.location ="verify_transaction.php?reference=" +response.reference;
    }
  });

  handler.openIframe();
}


</script>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
        
        <div class="row">
        <?php
        
        
mysqli_close($conn);
        
        
        
        
        ?>
        </div>
        </div>
     
       
    </body>
    <?php 
        include 'footer.php';
        ?>
</html>