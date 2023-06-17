
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div>
<?php
if(!empty($_GET))
{
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
    if(isset($_GET['info']))
    {
        echo $_GET['info'];
    }
   
}
?>
</div>
<form action="process/login.php" class="login-form" method="post">
    <label for="type">username</label>
    <input type="text" name="username" placeholder="username"required><br><br>
    <label for="type">password</label>
    <input type="password" name="password" placeholder="password"required><br><br>
    <input type="submit">
</form>
</body>
</html>