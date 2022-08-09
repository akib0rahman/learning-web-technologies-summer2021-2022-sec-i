<?php 
include("../Model/Admindb.php");
   $err=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

      $Name = $_REQUEST['name'];
	$Username = $_REQUEST['username'];
	$Password = $_REQUEST['password'];
	$confirmPassword=$_REQUEST['Cpassword'];
	$Age=$_REQUEST['age'];
	$Mobile=$_REQUEST['contact'];
	$Gender="";

	if ($Name == null || $Password == null || $confirmPassword==null || $Age == null || $Mobile == null)
	 {
		echo "<center><b><h1>Missing Information</h1></b></center> ";
		$err=true;
	}
	if(isset($_REQUEST['gender'])){
		$Gender=$_REQUEST['gender'];
		$err=false;
	}
	else {
		$err=true;
	}
	// else{
	// 	$data = $name."|".$password."|".$confirmPassword."|".$Age."|".$mobileno."|".$Gender."\r\n";
	// 	fwrite($file, $data);
	// 	header('location:../View/PatientSignUp.html');
	// }

	if($err==false){
		$connection=new Admindb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->Registration($conobj,$Name,$Username,$Password,$Age,$Mobile,$Gender);
		if($userQuery==true){
			header("location: ../View/AdminSignIn.php");
		}
		$connection->CloseCon($conobj);
	}

}
?>