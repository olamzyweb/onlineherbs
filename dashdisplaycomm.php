<?php
header("Connection: keep-alive");
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    // Query the database for comments related to the product ID
    $query = "SELECT * FROM comments ORDER BY comment_date DESC";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['username'];
            $commentText = $row['comment_text'];
            $commentDate = $row['comment_date'];

            // Output comments as HTML
            echo "<div class='comment'>";
            echo "<strong>$username</strong><br> $commentDate<br>";
            echo "$commentText";
            echo "</div>";
        }
    } else {
        echo "No comments found.";
    }
}

mysqli_close($conn);
?>