<?php  

if(isset($_POST['login-submit'])) {
	   $uesrname=$_POST ["uname"];          
	   $password=$_POST ["pass"];
	   
	  $dbhost="localhost";
      $dbuesr="root";
      $dbpas='';
      $db="e-commerce";
      $conn=new mysqli($dbhost,$dbuesr,$dbpas,$db);
	  
            if(!$conn){die("connection failad");} 
			
		$sql = "SELECT * FROM `users` WHERE FirstName = '".$uesrname."'";
        $result= mysqli_query($conn,$sql);
		  
		  if($result){
			$r = mysqli_fetch_assoc($result);
			if($r['password'] == $password){
				session_start();
				$_SESSION["uesrname"]=$uesrname;
				header("location:Grid.php");
				exit();
			}
			else {
				header("location:login.html");
				exit();
			}
		}
		header("location:login.html");
		exit();
   }

?>