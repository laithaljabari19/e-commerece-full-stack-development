<?php  

if(isset($_POST['login-submit'])) {
	   $uesrname=$_POST ["uname"];          
	   $password=$_POST ["pass"];
	   
	  $dbhost="localhost";
      $dbuesr="root";
      $dbpas='';
      $db="users";
      $conn=new mysqli($dbhost,$dbuesr,$dbpas,$db);
	  
            if(!$conn){die("connection failad");} 
			
		$sql = "SELECT * FROM `login` WHERE username = '".$uesrname."'";
        $result= mysqli_query($conn,$sql);
		  
		  if($result){
			$r = mysqli_fetch_assoc($result);
			
			$pwd=password_verify($password,$r['password']);
			
		
			if($pwd==true){
				session_start();
				$_SESSION["uesrname"]=$uesrname;
				header("location:ela.php?u=".$uesrname);
			exit();
			}
			else {
				header("location:front%20end.html");
				exit();
			}
		}
		header("location:front%20end.html");
		exit();
   }

?>