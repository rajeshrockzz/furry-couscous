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
    <body background="https://static.pexels.com/photos/186077/pexels-photo-186077.jpeg" style="height: 100%; 

    /* Center and scale the image nicely */
     font-size: 40px;
     color: greenyellow;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"><br>
        <?php
        // put your code here
$servername = "localhost";
$username = "id4057722_rajeshwebproject2";
$password = "9391872346";
$dbname = "id4057722_qwert123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $stmt = $conn->prepare("INSERT INTO My_Home2 (device1,device2,device3,device4,device5,device6,device7,device8,device9,device10,device11,device12) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
       $stmt->bind_param("ssssssssssss", $l1, $l2, $l3,$l4,$l5,$l6,$l7,$l8,$l9,$l10,$l11,$l12);
       
        $sql = "SELECT device1,device2,device3,device4,device5,device6,device7,device8,device9,device10,device11,device12 FROM My_Home2 WHERE id=(SELECT MAX(id) FROM My_Home2)";
        $result = $conn->query($sql); 
       
      if ($result->num_rows > 0){
        
      while($row = $result->fetch_assoc()) {  
        
        $l1=$row["device1"];
        $l2=$row["device2"];
        $l3=$row["device3"];
        $l4=$row["device4"];
        $l5=$row["device5"];
        $l6=$row["device6"];
        $l7=$row["device7"];
        $l8=$row["device8"];
        $l9=$row["device9"];
        $l10=$row["device10"];
        $l11=$row["device11"];
        $l12=$row["device12"];       
      }
      }
      $l4='on_';
       $stmt->execute();
        
        $sql1 = "SELECT device1,device2,device3,device4,device5,device6,device7,device8,device9,device10,device11,device12 FROM My_Home2 WHERE id=(SELECT MAX(id) FROM My_Home2)";
        $result1 = $conn->query($sql); 
       
       
       
        if ($result1->num_rows > 0){
        
      while($row = $result1->fetch_assoc()) {  
        echo "-------------------STATUS-----------------------<br>";
        echo "DEVICE1:".$row["device1"]."<br>";
        echo "DEVICE2:".$row["device2"]."<br>";
        echo "DEVICE3:".$row["device3"]."<br>";
        echo "DEVICE4:".$row["device4"]."<br>";
        echo "DEVICE5:".$row["device5"]."<br>";
        echo "DEVICE6:".$row["device6"]."<br>";
         echo "DEVICE7:".$row["device7"]."<br>";
        echo "DEVICE8:".$row["device8"]."<br>";
        echo "DEVICE9:".$row["device9"]."<br>";
        echo "DEVICE10:".$row["device10"]."<br>";
        echo "DEVICE11:".$row["device11"]."<br>";
        echo "DEVICE12:".$row["device12"]."<br>";
      }
      }

      ?>
      <br>
      <br>
      <br>
      
      <a style="text-decoration:none; color: greenyellow;" href="index.html">for changing status of the click here</a>
    </body>
</html>
