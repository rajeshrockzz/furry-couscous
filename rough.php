<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        $n=("SELECT MAX(id) FROM My_Home");
        $result=mysql_query($conn,$n);
        $row=  mysqli_fetch_array($result,MYSQLI_ASSOC);
        $last_id=$row['last_id'];
        $sql_update="UPDATE My_Home SET light1='BOOM' WHERE id=$last_id";
      
       $conn->query($sql_update);
        
        
      if ($result->num_rows > 0){
        
      while($row = $result->fetch_assoc()) {  
        
        echo "LIGHT1:".$row."<br>";
        
      }
      }
        
        
        
        
        ?>
    </body>
</html>
