<!DOCTYPE html>
<html lang="en">
<head>
  <title>HERBS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  color: whitesmoke;
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  padding-left: 10px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 10px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
input{
  padding: 10px;
  background-color: #111;
  width: 130px;
  border-radius: 4px;
  
}
  </style>
    
</head>
<body>

<?php 
    // include 'navbar.php';
    include 'connection.php';
    
    ?>
     <?php include 'bootstraparrangement.php';?>
<?php
// this is for total users
$que = "SELECT COUNT(id)FROM user";
        $result = mysqli_query($conn, $que);
        $rows = mysqli_fetch_array($result);
        $totalres = $rows[0];

// this is for totalmessages

        $quer = "SELECT COUNT(id)FROM messages";
        $resul = mysqli_query($conn, $quer);
        $rowss = mysqli_fetch_array($resul);
        $totalmess = $rowss[0];


//this is for total remedies

        $querr = "SELECT COUNT(id)FROM remedies";
        $resu = mysqli_query($conn, $querr);
        $rowsss = mysqli_fetch_array($resu);
        $totalrem = $rowsss[0];



       // /this is for total products

        $querrr = "SELECT COUNT(id)FROM products";
        $res = mysqli_query($conn, $querrr);
        $row = mysqli_fetch_array($res);
        $totalprod = $row[0];



//this is for comments
        $query4 = "SELECT COUNT(comment_id)FROM comments";
        $re = mysqli_query($conn, $query4);
        $roww = mysqli_fetch_array($re);
        $totalcomm = $roww[0];


?>



<div class="sidenav">
     <input type="submit" id="res" value="Users <?php echo $totalres;?>"><br><br>
     <input type="submit" id="mess" value="Messages <?php echo $totalmess;?>"><br><br>
     <input type="submit" id="prod" value="Products <?php echo $totalprod;?>"><br><br>
     <input type="submit" id="rem" value="Remedies <?php echo $totalrem;?>"><br><br>
     <input type="submit" id="comm" value="Comments <?php echo $totalcomm;?>"><br><br>
     <a href="create.php"><input type="submit" id="create" value="Create <?php echo $totalprod;?>"></a>
      
</div>

<div class="main">
  <h2>Admin Dashboard</h2>
 
<div id="rest">

</div>
   <!-- this is for comment display -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#comm').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "dashdisplaycomm.php",
                type: "POST",
                data: $('#contactform').serialize(),
                success: function(response){
                    $("#rest").html(response);
                }
            });
            return false;
        });
    });
    </script>  
    <!-- comment display end -->

    <!-- users display -->
        <script type="text/javascript">
    $(document).ready(function(){
        $('#res').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "dashdisplayuser.php",
                type: "POST",
                data: $('#contactform').serialize(),
                success: function(response){
                    $("#rest").html(response);
                }
            });
            return false;
        });
    });
    </script>  
    <!-- this is for product display -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#prod').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "dashdisplayprod.php",
                type: "POST",
                data: $('#contactform').serialize(),
                success: function(response){
                    $("#rest").html(response);
                }
            });
            return false;
        });
    });
    </script>  
    <script type="text/javascript">
    $(document).ready(function(){
        $('#rem').click(function(e){
            // e.preventDefault();
            // .click('#submit');
            $.ajax({
                url: "dashdisplayrem.php",
                type: "POST",
                data: $('#contactform').serialize(),
                success: function(response){
                    $("#rest").html(response);
                }
            });
            return false;
        });
    });
    </script>  
</body>
</html>
