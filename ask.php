<?php
include ("config/config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Dr.mofeed</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family: "Gill Sans", sans-serif;
    box-sizing: border-box;
    font-weight: bold;
    
}
        body{
            background-color: #55423d;
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
        }
        #sub-ask{
    padding: 12px 30px;
    width: 10%;
    margin-top: 30px;
    background-color: white;
    color:black;
    font-weight: bold;
    border: none;
    outline: none;
    border-radius: 20px;
    font-size: large;
        }
        #sub-ask:hover{
    cursor: pointer;
    background-color:rgb(35, 174, 187);
        }
        </style>
</head>
<body>
<?php
  if (!empty($_GET))
  {
    echo $_GET('key_error');
  }
  ?>
    <h1>ask doctor mofeed</h1>
    <div class = "">
    <form action="process/test_process.php">
        <label for="fname">First name:</label>
        <input type="text" id="ask" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="ask" name="lname"><br><br>
        <label for="phone">Phone number:</label>
        <input type="phone" id="ask" name="phone"><br><br>
    <p><label for="w3review">Ask Dr. Mofeed :</label></p>
    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
    <br>
        <input type="submit" value="Submit" id="sub-ask">
      </form>
    </div>
</body>
</html>