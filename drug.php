<?php
include("process/get_drug_process.php");
?>

<!DOCTYPE html>
<html>
    <head>
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

  </tr>
  
  <?php
  while($data=mysqli_fetch_assoc($drug_response))
  {
    echo "<tr>";
    echo "<td>".$data['name']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td>".$data['descreption']."</td>";
   
    echo "</tr>";
  }

  ?>

</table>


  
</body>
</html>

