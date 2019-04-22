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
  	

        <div class="col-sm-3" >Semester <select name="semester" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT DISTINCT Semester FROM Student");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Semester']; ?>"><?php echo $row['Semester']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>

    

        <div class="col-sm-3" >Section <select name="section" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT DISTINCT Section FROM Student");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Section']; ?>"><?php echo $row['Section']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>

		<div>
		
		<?php
		
		?>
		</div>


         <form id="selection-from" action="teacher2.php" method="post">
		
		<textarea rows="20" cols="40" name="content" >
		</textarea>
		
		
		<div>
		<input class="col-sm-3 btn btn-primary" " type=submit value="Apply">
		</div>
        </form>
		<?php
			extract($_POST);
			$sel="select SSN from student where SEMESTER=\"".$semester."\" and SECTION=\"".$section."\";"; 
			#echo $sel;
			$res1=mysqli_query($db,$sel);
			while ($arr1=mysqli_fetch_assoc($res1))
			{
				$stmt="update student set Notifications=\"".$content."\" where SSN=\"".$arr1['SSN']."\";";
				$res=mysqli_query($db,$stmt);
				#echo $stmt;
			}
			#$stmt="update student set Notification=\"".$content."\" where SSN=".$res1.";";
			#echo $stmt;
			#$res=mysqli_query($db,$stmt);	
			#echo "Work";
			
		?>
    </div>



</div>

</body>
</html>


	