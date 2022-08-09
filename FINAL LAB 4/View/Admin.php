<?php
  session_start();

  if(empty($_SESSION["Username"])){
    header("Location: Admin.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../controll/asset/css/design3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHome Page</title>
<style>
body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>


<b><center>	 <p style="color:green;font-size:50px;">Welcome to Job Portal</p> 
	          <p style="color:green;font-size:30px;">ADMIN Dashboard</p>  


</Center></b><br>
<center>

<table border="5px" style="background-color:black">
	<tr>
              
               <td><a href="UpdateProfile.php"> 1.ADD EMPLOYEE</a><br></td>
               <td><a href="Search.php"> 2.Search Employee</a><br> <br></td>
               <td><a href="FileUpload.php"> 3.Update Employee </a></br></td>
                
      </tr>

</table>
</Center>
	

</head>


</body>
</html>