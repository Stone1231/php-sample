<?php 

if(!empty($_POST['name'])){
    echo $_POST['name'];
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="post.php" method="post">
   
   <input type="tex" name="name">
   
   <input type="submit">
    
    
</form>


</body>
</html>