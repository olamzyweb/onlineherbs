<html>
<head>
    <meta charset="utf-8">
   
 
    <link rel="stylesheet" href="jquery-ui.min.css" />
   
 
 
</head>

<body>
 
 Book Name : <input type="text"  id="searc" placeholder="Enter Book Name">
 
 
  <script  src="jquery.min.js"></script>
   <script  src="jquery-ui.min.js"></script> 
 <script> 
 $(function(){
     $('#searc').autocomplete({
         source: 'search.php';
     });
 });
 </script>  
    
</body>
</html>