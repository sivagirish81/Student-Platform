<?php
    $db = mysqli_connect("localhost:3306","root","","dbms_1");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>COE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 align="center" style="padding-bottom:50px">Examination Results</h1>

    <div style="padding-bottom:50px">
        <div class="row">
  	
            <div class="col-sm-3" >Course <select name="course" form="selection-from"> <?php 
                $sql = mysqli_query($db, "SELECT Course_id FROM Course");
                while ($row = $sql->fetch_assoc()){?>
                <option value="<?php echo $row['Course_id']; ?>"><?php echo $row['Course_id']; ?></option>
                
                <?php
            
                }
            ?>
            </select> 
            </div>
    


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


        <form id="selection-from" action="coe2.php" method="post">
        <input class="col-sm-3 btn btn-primary" " type=submit value="Apply">
        </form>
    </div>



</div>

</body>
</html>
