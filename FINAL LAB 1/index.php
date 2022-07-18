<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);

  echo "<table border ='2'>
  <tr>
    <th>Name</th>
    <th>Id</th>
    <th>Email</th>
  </tr>";
 



while($row= mysqli_fetch_assoc($result)){
      echo "<tr>";
      echo "<td>". $row['Name']."</td>";
      echo "<td>". $row['Id'] ."</td>";
      echo "<td>". $row['Email']."</td>";     
       
    }

     echo "</table>";
?>