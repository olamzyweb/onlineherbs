<!DOCTYPE html>
<html>
<head>
    <title>Product Cards</title>
    <style>
        .product-card {
            border: 1px solid #ccc;
            width: 200px;
            padding: 10px;
            margin: 10px;
/*            width: 200px;*/
            
            display: inline-block;
        }
        @media only screen and (max-width: 600px) {
            .card{
                width: 100%;  Make the cards 100% width on screens less than or equal to 768px 
            }
        }
    </style>
</head>
<body>
    <?php
    // Replace with your database connection information
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "onlineherbs";

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch product data from the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display product information in cards
            echo '<div class="product-card">';
            echo '<h2>' . $row['product_cat'] . '</h2>';
            echo '<p>Price: $' . $row['product_id'] . '</p>';
            echo '<p>Description: ' . $row['product_desc'] . '</p>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
