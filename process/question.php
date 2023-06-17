<?php
include ("config/config.php");
$question_query = "SELECT * FROM question";
$drug_response = mysqli_query($connection,$question_query);
?>
