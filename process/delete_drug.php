<?php
if(isset($_GET['id']))
{
include ("../config/config.php");
$drug_id = $_GET['id'];
$drug_query ="DELETE FROM drug WHERE id='$drug_id'";
if(mysqli_query($connection,$drug_query))
{
    echo "Delete drug successfully";
}
else
{
    echo "Error".$drug_query." ".mysqli_error($connection);
}
}
else
echo"404 page does not found";
?>