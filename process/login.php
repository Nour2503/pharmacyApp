<?php
include ("../config/config.php");
if(!empty($_POST))
{
$error="";
if(empty($_POST['username']) || empty($_POST['password']))
{
    $error.="user name or password cannot be empty!";
}
if ($error !="")
{
  header("Location:../log.php?error=$error");
}

else{
    //login process
    $username= strtolower($_POST['username']);
    $password= $_POST['password'];
    //select from admin table
    $admin_query = "SELECT * FROM admin WHERE password = '$password' AND username = '$username' ";
    if(mysqli_query($connection, $admin_query))
    {
      $admin_response = mysqli_query($connection, $admin_query);
      if(mysqli_num_rows($admin_response)==1)
      {
       session_start();
       $_SESSION['admin_id'] =$data['id'];
       $_SESSION['username'] =$data['username'];
       header("Location:../admin_home.php");
      }
      else
      {
        $info="the Admin account does not a found";
        header("Location:../log.php?info=$info");
      }
    }
}


}


?>


