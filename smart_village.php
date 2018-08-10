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

$username = "id4057722_rajeshwebproject2";

$password = "9391872346";

$dbname = "id4057722_qwert123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
 
// sql to create table
 $sql = "INSERT INTO My_Home2 (device1,device2,device3,device4,device5,device6,device7,device8,device9,device10,device11,device12) VALUES ('on','on','on','on','on','on','on','on','on','on','on','on')";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
   echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
        ?>
    </body>
</html>
