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
       
        <script>
            function raj11()
            {
     raj();           
    }
        </script>
        
        <h1 style="align-items: center">RAJESH HOME</h1>
        <?php
        // put your code here
function raj()
{
 echo "rajeshrockz"   ;
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 $sql="INSERT INTO My_Home (light1,light2,light3,light4,light5,light6) VALUES('ra','ra','ra','ra','r','ra')"  ;
       if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
   echo "Error creating table: " . $conn->error;
}

 
 
 
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//$last_id = mysqli_insert_id($conn);
        
        $sql = "SELECT light1,light2,light3,light4,light5,light6 FROM My_Home WHERE id=(SELECT MAX(id) FROM My_Home)";
        $result = $conn->query($sql); 

      if ($result->num_rows > 0){
        
      while($row = $result->fetch_assoc()) {  
        echo "-------------------STATUS-----------------------<br>";
        echo "LIGHT1:".$row["light1"]."<br>";
        echo "LIGHT2:".$row["light2"]."<br>";
        echo "LIGHT3:".$row["light3"]."<br>";
        echo "LIGHT4:".$row["light4"]."<br>";
        echo "LIGHT5:".$row["light5"]."<br>";
        echo "LIGHT6:".$row["light6"]."<br>";
      }
      }
    
  //      echo "<button onclick="light1_on()">light1_on</button> ";   
  ?>
  
  
        <button onclick="raj11()">pionooooo</button>

    <?php    
  
      function light1_on()
       {
       
       echo "rajesh rockzzz";     
       $servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $stmt = $conn->prepare("INSERT INTO My_Home (light1,light2,light3,light4,light5,light6) VALUES (?,?,?,?,?,?)");
       $stmt->bind_param("ssssss", $l1, $l2, $l3,$l4,$l5,$l6);

       
       $sql = "SELECT light1,light2,light3,light4,light5,light6 FROM My_Home WHERE id=(SELECT MAX(id) FROM My_Home)";
       $result = $conn->query($sql);

      if ($result->num_rows > 0){
        
      while($row = $result->fetch_assoc()) {  
        
        $l1=$row["light1"];
        $l2=$row["light2"];
        $l3=$row["light3"];
        $l4=$row["light4"];
        $l5=$row["light5"];
        $l6=$row["light6"];
               
      }
      }
       $stmt->execute();
       $sql = "UPDATE My_Home SET light1='off' WHERE id=(SELECT MAX(id) FROM My_Home)";
       $conn->query($sql);
       } 
       ?>
      
        
    </body>
</html>
