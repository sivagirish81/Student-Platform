<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>

<html>
	<head>
		<title>Home</title>
		<style>
			.Mylister{
					background-color: black;
					overflow: hidden;
					}
			.Mylister a {
					float : left;
					color : green;
					text-align: center;
					padding: 14px 16px;
					text-decoration: none;
					font-size: 17px;
					}
			.Mylister a:hover {
					background-color: gray;
					color: black;
					}
			
			.Mylister a.active {
					background-color: #4CAF50;
					color: black;
					}
			
			.top-right-corner{
					position:absolute;
					top:14px;
					right:17px;
					}
			
			.My-container
			{
				border: 2px solid black;
				padding: 400px;
				background: url(Classroom-2.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.Trans-container 
			{
			  /*position: relative;*/
			  position:relative;
			  bottom:-200px;
			  max-width: 800px;
			  margin: 0 auto;
			  /*height:500px;*/
			}


			.Trans-container .Trans-content {
			  position: absolute;
			  bottom: 0;
			  background: rgb(0, 0, 0); 
			  background: rgba(0, 0, 0, 0.5); 		/*opacity = 0.5*/
			  width: 100%;
			  padding: 20px;
			  height:500px;
			  text-align:center;
			}
			
			.deco{
				text-shadow: 2px 2px #FF0000;
				color:black;
				}

			#Tcon
			{text-shadow: 2px 2px #FF0000;
				color:black;
				font-size:30px;}
			
			.transcontent
			{
				align:center;
			}
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="Topper">
			<div class="Mylister">
					<a href="#" class="active">Home</a>
					<a href="Attendance.php" >Attendance</a>
					<a href="teacher1.php">Notifications</a>
					<a href="teacher3.php">Text links and  Video links</a>
					
			</div>
			<div class="top-right-corner">
				<a href="#"><u>Logout</u></a>
			</div>
		<div class="My-container">
			<div class="Notifier">
				<div class="Trans-Container">
					<div class="Trans-content">
						<h1 class="deco">Welcome</h1>
						<p id="TCon"></p>
					</div>
				</div>
			</div>
		</div>
		<?php
		session_start();
			$stmt="SELECT Name FROM teacher WHERE Initials=\"".$_SESSION['uname']."\"";
			$sql=mysqli_query($db,$stmt);
			while ($arr=mysqli_fetch_assoc($sql))
			{
			echo "<script type='text/javascript'>
					var x=document.getElementById('TCon');
					x.innerHTML=\"".$arr['Name']."\"</script>";
			}
					
		?>
		<form id="selection-from" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            </form>
	</body>
</html>
