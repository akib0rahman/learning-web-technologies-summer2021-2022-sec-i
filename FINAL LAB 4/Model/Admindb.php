<?php
class Admindb{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hms1";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function Registration($conn,$Name,$Username,$Password,$Age,$Mobile,$Gender)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO admins (Name,Username,Password,Age,Mobile,Gender) VALUES(?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssss",$Name,$Username,$Password,$Age,$Mobile,$Gender);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }
