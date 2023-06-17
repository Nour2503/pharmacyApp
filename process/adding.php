<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$price=$_POST["price"];

}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "km";


$connetion = mysqli_connect($servername, $username, $password, $dbname);

if (!$connetion) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO drug (name, price) VALUES ('$name','$price')";

if (mysqli_query($connetion, $sql)) {
echo "<h4>insert drug successfully</h4>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connetion);
}

mysqli_close($connetion);

?>

