<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
	body
	{
		
      background-color: #130f40;
      background-image: linear-gradient(300deg, #393660 0%, #000000 95%);
      background-repeat: no-repeat;
      background-size: cover;
      height: 100%;
      background-position: center;
      color: aliceblue;
    
	}
	*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		/* NAVIGATION BAR */
		.nav{
			width: 100%;
			height: 75px;
			background-color: black;
			line-height: 75px;
			padding:0px 100px;
			position: fixed;
			z-index : 1;
		}
		.nav .logo{
			font-weight: bold;
			letter-spacing: 1.5px;
		}
		.nav .logo h1{
			font-size: 30px;
			float: right;
			color: white;
			text-transform: uppercase;
		}
		.nav .btn{
			float:left;
		}
		.nav .btn a{
			color: white;
			text-decoration: none;
			font-size: 20px;
			font-weight: bold;
			text-transform: uppercase;
			padding: 0px 32px;
		}
		.nav .btn a:hover{
			color:#cccccc;
		}
	
		/* Main */
		.main{
			width: 100%;
			height:100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.main .view{
			font-size: 30px;
			font-weight: bold;
			color: white;
			background: transparent;
			padding: 20px;
			border: solid;
			border-radius: 14px;
		}
		.main .view a{
			color: white;
			background: transparent;
			text-decoration: none;
			font-size: 30px;
			padding: 0px 90px;
			font-weight: bold;
		}
		.main .view a:hover{
			scale: 1.2;
		}
	
</style>
<body>
<?php
$username = "admin";
$password = "admin";

session_start();
if(isset($_SESSION['username'])){
	?>
	
	<div class='nav'>
		<div class='logo'> 
			<h1>ADMIN PORTAL</h1> 
		</div>
		<div class='btn'>  
			<a href='logout.php'>Logout</a>
		</div>
	</div>

	<div class="main">
		<h1>Welcome admin !!</h1><br><br><br><br><br><br>
		<span class="view">
			<a href='registered_complaints.php'>View Complaints</a>
		</span>
	</div>
	
	<?php
	
}
else{
		if($_POST['username']==$username && $_POST['password']==$password){
			
				$_SESSION['username']=$username;
				?>
				<script> 
					alert('Successfully logged in!') 
				</script> 
				
				<div class='nav'>
					<div class='logo'> 
						<h1>ADMIN PORTAL</h1> 
					</div>
					<div class='btn'>  
						<a href='logout.php'>Logout</a>
					</div>
				</div>
				
				<div class="main">
					<h1>Welcome admin !!</h1><br><br><br><br><br><br>
					<span class="view">
						<a href='registered_complaints.php'>View Complaints</a>
					</span>
				</div>
	
	<?php
				
		}
		else{
				?>
				<script> 
					alert('The Username/Password entered by you is incorrect. Please Try Again!!!') 

				</script> 
				echo "<script>location.href='login.html'</script>"
				<?php
		}
}

?>
</body>
</html>