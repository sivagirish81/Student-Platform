<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Send Notification</title>
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
  	

     

    

        <div class="col-sm-3" >Course Id <select name="section" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT Course_id FROM course");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Course_id']; ?>"><?php echo $row['Course_id']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>
		
		<div class="col-sm-3" >Initial <select name="init" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT Initials FROM teacher");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Initials']; ?>"><?php echo $row['Initials']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>

		<div>
		
		<?php
		
		?>
		</div>


        <form id="selection-from" action="teacher4.php" method="post">
        <br>
		<br>
		<input type="text" name="content1" size="50" maxlength="200"\>
		<br>
		<br>
		<br>
		<input type="text" name="content2" size="50" maxlength="200"\>
		<br>
		<br>
		<input class="col-sm-3 btn btn-primary" " type=submit value="Apply"\>
		
        </form>
		
    </div>



</div>

</body>
</html>
