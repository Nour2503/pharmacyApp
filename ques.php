<?php
include("process/question.php");
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


<table>
  <tr>
    <th>Fname</th>
    <th>Lname</th>
    <th>Questions</th>

  </tr>
  
  <?php
  while($data=mysqli_fetch_assoc($drug_response))
  {
    echo "<tr>";
    echo "<td>".$data['Fname']."</td>";
    echo "<td>".$data['Lname']."</td>";
    echo "<td>".$data['question']."</td>";
   
    echo "</tr>";
  }

  ?>

</table>


  
</body>
</html>

