<?php
header("Connection: keep-alive");
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    // Query the database for comments related to the product ID
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['name'];
            $commentText = $row['email'];
            $commentDate = $row['password'];

            // Output comments as HTML
            echo "<div class='comment'>";
            echo "username :<strong>$username</strong><br>password : $commentDate<br>";
            echo "email :$commentText";
            echo "</div><br><br
            >";
        }
    } else {
        echo "No comments found.";
    }
}

mysqli_close($conn);
?>