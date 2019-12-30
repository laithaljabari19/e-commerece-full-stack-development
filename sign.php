<?php
if(isset($_POST['SinUp-submit'])) {
	$uesrname=$_POST ["username"]; 	   

	$email=$_POST["email"];
	$password=$_POST ["password"];   
	$RepatSpassword=$_POST["RepatSpassword"];
	   
	  if($RepatSpassword==$password){
		$dbhost="localhost";
		$dbuesr="root";
		$dbpas='';
		$db="users";
	    
		 $conn=new mysqli($dbhost,$dbuesr,$dbpas,$db);
	  
            if(!$conn){die("connection failad");
			} 
			$hash=password_hash($password,PASSWORD_DEFAULT);
		$sql = "INSERT INTO `login`(`username`, `email`, `password`) VALUES ('".$uesrname."','".$email."','".$hash."')";
        $result= mysqli_query($conn,$sql);
		  
		  if($result){
			  header("location:front%20end.html");
			  exit();
		  }
		 else{
			header("location:sign%20up.html");
			exit();
		}
			  
	  }
	  else{
		  header("location:sign%20up.html");
		exit();
	  }
}


?>