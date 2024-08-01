<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="w3.js"></script>   
    <script src="w3.css"></script> 
    <?php include 'bootstraparrangement.php';?>
   
<style>

/* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 10px;
}

/* Container styling */
.cart-container {
    background-color: #ffffff;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border-radius: 10px;
    width: 100%;
    max-width: 800px;
    padding: 40px;
}
@media (max-width:500px;){

    .cart-container{
        width: 100%;
    }
}


/* Header styling */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Cart items styling */
.cart-items {
    margin-bottom: 20px;
}

.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #e0e0e0;
}

.cart-item:last-child {
    border-bottom: none;
}

.cart-item img {
    width: 50px;
    height: 50px;
    border-radius: 5px;
    margin-right: 20px;
}

.cart-item-details {
    flex-grow: 1;
}

.cart-item-name {
    font-weight: 500;
    color: #555;
}

.cart-item-quantity,
.cart-item-price,
.cart-item-total {
    width: 80px;
    text-align: right;
    color: #777;
}

/* Summary styling */
.cart-summary {
    text-align: right;
}

.cart-summary h3 {
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

#checkout-button {
    /* background-color: #ff6f61; */
    background-image: linear-gradient(to bottom right, #69bb8a,#4dad85,#3c7d5c);;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#checkout-button:hover {
    background-color: #e65b50;
}

</style>

</head>
<body>

</br></br></br></br></br></br>
<div class="cart-container">
<!-- <h1>Your Shopping Cart</h1> -->
<?php include 'navbar.php';?>
<?php
        $total_price = 0;
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product_id => $product) {
                $total = $product['price'] * $product['quantity'];
                $total_price += $total;
                 
                $prod_id = $product_id;
                   $prod_nam = $product['name'];
                   $prod_price = $product['price'];
                   $prod_quant = $product['quantity'];
                   $tot = $total;
                  $tot_price = $total_price;
            


                
  echo '
           
    
        <div class="cart-items">
            <!-- Example of a cart item -->
            <div class="cart-item">
                <img src="https://via.placeholder.com/50" alt="">
                <div class="cart-item-details">
                    <div class="cart-item-name">'.$prod_nam.'</div>
                </div>
                <div class="cart-item-quantity">'.$prod_quant.'</div>
                <div class="cart-item-price">'.$prod_price.'</div>
                <div class="cart-item-total">'.$total.'</div>
            </div>
          
        
        </div>
        
   
    ';

            }
    }
           

echo'<div class="cart-summary">
            <h3>Total: &#8358;<span id="cart-total">'.$total_price.'</span></h3>
            <button id="checkout-button">Proceed to Checkout</button>
        </div>';
        ?>
</div>

</body>
</html>
