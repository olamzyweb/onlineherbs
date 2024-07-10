<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $username = $_POST['username'];
    $comment = test_input($_POST["comment"]);



if($username == ""){
 echo "please login first";
}elseif($comment == ""){
echo "comment box empty";
}else{

    $query = "INSERT INTO comments (product_id, username, comment_text, comment_date) VALUES ('$product_id', '$username', '$comment', NOW())";

    if (mysqli_query($conn, $query)) {
        // Comment added successfully
        echo "comment added successfully";
        // header("Location: your_product_page.php?id=$product_id"); // Redirect back to the product page
    } else {
        // Handle the error
        echo "not sent remove all apostrophes";
        // echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
