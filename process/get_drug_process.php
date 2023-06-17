<?php
include ("config/config.php");
$drug_query = "SELECT * FROM drug";
$drug_response = mysqli_query($connection,$drug_query);
?>
