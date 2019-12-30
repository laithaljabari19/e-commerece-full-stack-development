
<?php
session_start();
if(isset($_SESSION['uesrname']))
{
	?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="stylle.css"> 

</head>
<body>

<h2> hello  <?php echo $_GET['u']?></h2>
<center> 

 <h1> Laith Electronics </h1>
 </center> 
 <a href="logout.php" >Loguot</a> 
<div class="grid-container">
  <div class="grid-item">
	<div class="item">
		<center>
			<img src="lab.jpg">
		
		
			<h4 > labtop deel<span>400$ </span> </h4> 
			
		</center>
	</div>
  </div>

  <div class="grid-item"><div class="item">
		<center>
			<img src="iphone.jpg">
		
		
			<h4 > iphone x<span>650$ </span> </h4> 
			
		</center>
	</div></div>
  <div class="grid-item"><div class="item">
		<center>
			<img src="p30.jpg">
		
		
			<h4 > huawei p30<span>500$ </span> </h4> 
			
		</center>
	</div></div>  
  <div class="grid-item"><div class="item">
		<center>
			<img src="apil.jpg">
		
		
			<h4 > Apple Watch<span>50$ </span> </h4> 
			
		</center>
	</div></div>
  <div class="grid-item">	<center class="item">
			<img src="sam.jpg">
		
		
			<h4 > suhd 2016<span>350$ </span> </h4> 
			
		</center>
	</div>
	<div class="grid-item">	<center class="item">
			<img src="app.jpg">
		
		
			<h4 > airpods 2019<span>70$ </span> </h4> 
			
		</center>
	</div> 
	</div>
  



  <?php
 }
 else{header("location:front%20end.html");
			exit();}
 ?>








</body>
</html>