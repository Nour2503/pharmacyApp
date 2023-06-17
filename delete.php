<?php
include("process/get_drug_process.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>

<div class="error">

</div>

    <div class="goods">

    </div>

<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Delete?</th>
  </tr>
  
  <?php
  while($data=mysqli_fetch_assoc($drug_response))
  {
    $drugs_id=$data['id'];
    echo "<tr>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td>".$data['descreption']."</td>";
    echo "<td>"."<a href='process/delete_drug.php?id=$drugs_id'><i class='fa fa-remove' style='color:red'></i></a>"."</td>";
    echo "</tr>";
  }

  ?>

</table>


  
</body>
</html>

