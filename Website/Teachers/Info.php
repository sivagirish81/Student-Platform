<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<a href="Teacher_Home.html" class="active">Home</a>
<div class="container">
  <h1 align="center" style="padding-bottom:50px">Send Notification</h1>

    <div style="padding-bottom:50px">
        <div class="row">
  	

        
		<div>
		
		<?php
		
		?>
		</div>

         <form id="selection-from" action="Info2.php" method="post">
		
		
		<div>
		<input class="col-sm-6 btn btn-primary" type=submit value="Get Details">
		</div>
        </form>
		
    </div>



</div>

</body>
</html>
