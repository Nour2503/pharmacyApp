<?php
include ("../config/config.php");
$firstName=$_GET['fname'];
$lastName=$_GET['lname'];
$visitorQustion=$_GET['w3review'];
if (!empty($_GET))
{
    $error="";
    if(empty($_GET['fname']))
    {
        $error.="Fname must be value";
    }
    if(empty($_GET['lname']))
    {
        $error.="lname must be value";
    }
    if(empty($_GET['w3review']))
    {
        $error.="ask form must be value";
    }
    else{
        $firstName =$_GET['fname'];
        $lastName=$_GET['lname'];
        $visitorQustion=$_GET['w3review'];
        $ask_query="INSERT INTO question (Fname,Lname,question) VALUES('$firstName','$lastName','$visitorQustion')";
       if(mysqli_query($connection,$ask_query)) 
       {
        echo "send your question successfully thank you";
       }
       else
       {
        echo "error.$ask_query.mysqli_error($connection)";
       }
    }
}
?>