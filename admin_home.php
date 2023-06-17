<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
   <div>
    <h2>Welcome Admin<?php echo$_SESSION['username']?></h2>
    <button><a href="add_drugs.php">Add Drugs</a></button>
    <button><a href="delete.php">Delete Drugs</a></button>
    <button><a href="ques.php">questions</a></button>
   </div> 
</body>
</html>